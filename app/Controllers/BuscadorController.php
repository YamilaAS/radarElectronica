<?php

namespace App\Controllers;

use App\Models\OrdenDeReparacionModel;
use App\Models\ClienteModel;
use function PHPUnit\Framework\isEmpty;

class BuscadorController extends BaseController{

    private OrdenDeReparacionModel $ordenDeReparacionModel;
    private ClienteModel $clienteModel;


    public function __construct() {
        $this->ordenDeReparacionModel = new OrdenDeReparacionModel;
        $this->clienteModel = new ClienteModel;
    }

    public function verBuscardor () {
        return view('vistaBuscador');
    }

    public function  procesarBuscador(){
        $apellidoCliente = (string)$this->request->getPost('cliente');
        $idOrdenDeReparacion = (int)$this->request->getPost('orden');

        $ordenDeReparacion = $this->ordenDeReparacionModel->find($idOrdenDeReparacion);
        $listaPorApellido = $this->clienteModel->where('apellido', $apellidoCliente)->find();
        var_dump($listaPorApellido);
    }

    public function  procesarBusquedaRapida(){
        $q = (string)$this->request->getGet('q');
        $limit = (int)$this->request->getGet('limit');
        $offset = (int)$this->request->getGet('offset');

        if(is_numeric($q)){
            $orden = (int)$q;
            return $this->buscarPorOrden($orden);
        }else {
            return $this->buscarPorApellido($q, $limit, $offset, null);
        }

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
        $ordenes = $this->ordenDeReparacionModel
            ->join('clientes', 'ordenDeReparacion.idCliente = clientes.id')
            ->where('clientes.apellido', $apellido)
            ->orderBy('clientes.nombre', 'asc')
            ->findAll($limit, $offset);

        $cantidadOrdenes = sizeof($ordenes);
        if ($cantidadOrdenes > 0) {
            $paginaAnterior = null;
            $paginaSiguiente = null;

            if ($cantidadOrdenes == $limit) {
                $nuevoOffset = $offset + $limit;
                $paginaSiguiente = "?q=" . $apellido . "&limit=" . $limit . "&offset=" . $nuevoOffset;
            }
            if ($offset > 0) {
                $nuevoOffset = $offset - $limit;
                if ($nuevoOffset < 0) {
                    $nuevoOffset = 0;
                }
                $paginaAnterior = "?q=" . $apellido . "&limit=" . $limit . "&offset=" . $nuevoOffset;
            }

            $datos = array(
                'paginaAnterior' => $paginaAnterior,
                'paginaSiguiente' => $paginaSiguiente,
                'ordenes' => $ordenes
            );
            return view('vistaBuscador', $datos);
        } else {
            $datos = array (
                'titulo' => 'Orden no encontrada el apellido ' . $apellido
            );
            return view('vistaError',$datos);
        }
    }

}