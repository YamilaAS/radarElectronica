<?php

namespace App\Controllers;

use App\Entities\InformeDeReparacion;
use App\Models\InformeDeReparacionModel;
use App\Models\OrdenDeReparacionModel;
use App\Helpers\ContratoHelper;
use App\Helpers\PDFHelper;
use App\Models\ClienteModel;
use App\Entities\Cliente;
use App\Models\SalidaDeTrabajoModel;
use App\Entities\SalidaDeTrabajo;
use Config\Database;

class OrdenDeReparacionController extends BaseController
{
    private OrdenDeReparacionModel $ordenDeReparacionModel;
    private ClienteModel $clienteModel;
    private SalidaDeTrabajoModel $salidaDeTrabajoModel;
    private InformeDeReparacionModel $informeDeReparacionModel;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->ordenDeReparacionModel = new OrdenDeReparacionModel;
        $this->clienteModel = new ClienteModel;
        $this->salidaDeTrabajoModel = new SalidaDeTrabajoModel;
        $this->informeDeReparacionModel = new InformeDeReparacionModel;
        $this->db = Database::connect();
    }

    public function verOrdenDeReparacion(int $idOrdenDeReparacion)
    {
        $ordenDeReparacion = $this->ordenDeReparacionModel->find($idOrdenDeReparacion);
        if ($ordenDeReparacion != null) {
            $cliente = $this->clienteModel->find($ordenDeReparacion->idCliente);
            $salidaDeTrabajo = $this->salidaDeTrabajoModel->where('idOrdenDeReparacion', $idOrdenDeReparacion)->first();
            $informeDeReparacion = $this->informeDeReparacionModel->where('idOrdenDeReparacion', $idOrdenDeReparacion)->first();

            if (empty($salidaDeTrabajo)) {
                $salidaDeTrabajo = null;
            }

            if (empty($informeDeReparacion)) {
                $informeDeReparacion = null;
            }

            $datos = [
                "cliente" => $cliente,
                "ordenDeReparacion" => $ordenDeReparacion,
                "linkContrato" => "/ordenDeReparacion/" . $idOrdenDeReparacion . "/contrato",
                "salidaDeTrabajo" => $salidaDeTrabajo,
                "informeDeReparacion" => $informeDeReparacion
            ];

            return view('vistaOrdenDeReparacion', $datos);
        } else {
            $datos = array(
                'titulo' => 'Orden no encontrada'
            );
            return view('vistaError', $datos);
        }
    }

    public function verContratoOrdenDeReparacion(int $idOrdenDeReparacion)
    {
        $ordenDeReparacion = $this->ordenDeReparacionModel->find($idOrdenDeReparacion);
        $cliente = $this->clienteModel->find($ordenDeReparacion->idCliente);
        $contrato = view('contrato', ["ordenDeReparacion" => $ordenDeReparacion, "cliente" => $cliente]);
        PDFHelper::mostrarPDF($contrato);
    }

    public function borrarOrdenDeReparacion(int $idOrdenDeReparacion)
    {
        $this->db->transStart();

        $salidaDeTrabajo = $this->salidaDeTrabajoModel->where('idOrdenDeReparacion', $idOrdenDeReparacion)->first();
        if (isset($salidaDeTrabajo) && $salidaDeTrabajo != null) {
            $this->salidaDeTrabajoModel->where('idOrdenDeReparacion', $idOrdenDeReparacion)->delete();
        }

        if ($this->db->transFailure) {
            $this->db->transRollback();
            return "error al eliminar el informe de salida de trabajo ";
        } else {
            $informeDeReparacion = $this->informeDeReparacionModel->where('idOrdenDeReparacion', $idOrdenDeReparacion)->first();
            if (isset($informeDeReparacion) && $informeDeReparacion != null) {
                $this->informeDeReparacionModel->where('idOrdenDeReparacion', $idOrdenDeReparacion)->delete();
            }
            if ($this->db->transFailure) {
                $this->db->transRollback();
                return "error al eliminar el informe de reparación ";
            } else {
                $this->ordenDeReparacionModel->delete($idOrdenDeReparacion);

                $ok = $this->db->transComplete();
                if ($ok) {
                    return redirect()->to('/');
                } else {
                    return "error al intentar eliminar orden de reparacion" . $idOrdenDeReparacion;
                }
            }
        }
    }

    private function buscarOrdenDeReparacion(int $idOrdenDeReparacion)
    {
        $ordenDeReparacion = $this->ordenDeReparacionModel->find($idOrdenDeReparacion);
        if ($ordenDeReparacion != null) {
            $cliente = $this->clienteModel->find($ordenDeReparacion->idCliente);
            $salidaDeTrabajo = $this->salidaDeTrabajoModel->where('idOrdenDeReparacion', $idOrdenDeReparacion)->first();
            $informeDeReparacion = $this->informeDeReparacionModel->where('idOrdenDeReparacion', $idOrdenDeReparacion)->first();

            if (empty($salidaDeTrabajo)) {
                $salidaDeTrabajo = null;
            }

            if (empty($informeDeReparacion)) {
                $informeDeReparacion = null;
            }

            $datos = [
                "cliente" => $cliente,
                "ordenDeReparacion" => $ordenDeReparacion,
                "linkContrato" => "/ordenDeReparacion/" . $idOrdenDeReparacion . "/contrato",
                "salidaDeTrabajo" => $salidaDeTrabajo,
                "informeDeReparacion" => $informeDeReparacion
            ];

            return $datos;
        } else {
            $datos = array(
                'titulo' => 'Orden no encontrada'
            );
            return view('vistaError', $datos);
        }
    }

    public function modificarOrdenDeReparacion(int $idOrdenDeReparacion){
        $datosOrdenDeReparacion = $this->buscarOrdenDeReparacion($idOrdenDeReparacion);

        if ($datosOrdenDeReparacion != null) {
           return view('vistaModificarOrdenDeReparacion', $datosOrdenDeReparacion);
        } else {
            $datos = array(
                'titulo' => 'Orden no encontrada'
            );
            return view('vistaError', $datos);
        }
    }

}