<?php

namespace App\Controllers;

use App\Models\OrdenDeReparacionModel;
use App\Models\ClienteModel;
use function PHPUnit\Framework\isEmpty;

class BuscadorController extends BaseController{

    private OrdenDeReparacionModel $ordenDeReparacionModel;
    private ClienteModel $clienteModel;
    protected $helpers = ['form'];

    public function __construct() {
        $this->ordenDeReparacionModel = new OrdenDeReparacionModel;
        $this->clienteModel = new ClienteModel;
    }

    public function  procesarBusquedaRapida(){
        $q = (string)$this->request->getGet('q');

        if(is_numeric($q)){
            $orden = (int)$q;
            return $this->buscarPorOrden($orden);
        }else {
            return redirect()->to('/buscar?apellido=' . $q);
        }
    }

    public function procesarBusqueda() {
        $limit = (int)$this->request->getGet('limit');
        $offset = (int)$this->request->getGet('offset');

        $apellido = (string)$this->request->getGet('apellido');
        $aparato = (array)$this->request->getGet('aparato');
        $estado = (array)$this->request->getGet('estado');
        $fechaDesde = (string)$this->request->getGet('fechaDesde');
        $fechaHasta = (string)$this->request->getGet('fechaHasta');

        $filtros = array(
            'aparato' => $aparato,
            'estado' => $estado,
            'fechaDesde' => $fechaDesde,
            'fechaHasta' => $fechaHasta
        );

        return $this->buscarPorApellido($apellido, $limit, $offset, $filtros);

    }

    public function  buscarPorOrden($idOrdenDeReparacion) {
        $ordenDeReparacion = $this->ordenDeReparacionModel->find($idOrdenDeReparacion);

        if ($ordenDeReparacion != null) {
            return redirect()->to('/ordenDeReparacion/' . $idOrdenDeReparacion);
        } else {
            $datos = array (
                'titulo' => 'Orden no encontrada'
            );
            return view('vistaError',$datos);
        }
    }

    public function  buscarPorApellido($apellido, $limit, $offset, $filtroDeBusqueda) {
        $ordenes = $this->generarBusqueda($apellido, $filtroDeBusqueda)->findAll($limit, $offset);
        $total = $this->generarBusqueda($apellido, $filtroDeBusqueda)->countAllResults();

        $paginaAnterior = null;
        $paginaSiguiente = null;
        $cantidadOrdenes = sizeof($ordenes);
        if ($cantidadOrdenes > 0) {
            if ($cantidadOrdenes == $limit && $total > $offset + $limit) {
                $nuevoOffset = $offset + $limit;
                $paginaSiguiente = "?apellido=" . $apellido . "&limit=" . $limit . "&offset=" . $nuevoOffset;
            }
            if ($offset > 0) {
                $nuevoOffset = $offset - $limit;
                if ($nuevoOffset < 0) {
                    $nuevoOffset = 0;
                }
                $paginaAnterior = "?apellido=" . $apellido . "&limit=" . $limit . "&offset=" . $nuevoOffset;
            }
        }

        $datos = array(
            'ordenes' => $ordenes,
            'cantidadOrdenes' => $cantidadOrdenes,
            'total' => $total,
            'paginaAnterior' => $paginaAnterior,
            'paginaSiguiente' => $paginaSiguiente
        );

        return view('vistaBuscador', $datos);
    }

    private function generarBusqueda($apellido, $filtroDeBusqueda) {
        $busqueda = $this->ordenDeReparacionModel
            ->select("*,ordenDeReparacion.id as ordenId")
            ->join('clientes', 'ordenDeReparacion.idCliente = clientes.id ')
            ->join('informeDeReparacion', 'ordenDeReparacion.id = informeDeReparacion.idOrdenDeReparacion', 'left')
            ->join('salidaDeTrabajo', 'ordenDeReparacion.id = salidaDeTrabajo.idOrdenDeReparacion', 'left');

        if (isset($apellido) && $apellido != '') {
            $busqueda->where('clientes.apellido', $apellido)
                ->orderBy('clientes.nombre', 'asc');
        } else {
            $busqueda->orderBy('ordenDeReparacion.fechaIngreso', 'desc');
        }
        return $busqueda;
    }


}