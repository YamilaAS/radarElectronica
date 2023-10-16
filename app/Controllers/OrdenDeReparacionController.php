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

class OrdenDeReparacionController extends BaseController{
    private OrdenDeReparacionModel $ordenDeReparacionModel;
    private ClienteModel $clienteModel;
    private SalidaDeTrabajoModel $salidaDeTrabajoModel;
    private InformeDeReparacionModel $informeDeReparacionModel;

    public function __construct() {
        $this->ordenDeReparacionModel = new OrdenDeReparacionModel;
        $this->clienteModel = new ClienteModel;
        $this->salidaDeTrabajoModel = new SalidaDeTrabajoModel;
        $this->informeDeReparacionModel = new InformeDeReparacionModel;
    }

    public function verOrdenDeReparacion(int $idOrdenDeReparacion) {
        $ordenDeReparacion = $this->ordenDeReparacionModel->find($idOrdenDeReparacion);
        $cliente = $this->clienteModel->find($ordenDeReparacion->idCliente);
        $salidaDeTrabajo = $this->salidaDeTrabajoModel->where('idOrdenDeReparacion',$idOrdenDeReparacion)->first();
        $informeDeReparacion = $this->informeDeReparacionModel->where('idOrdenDeReparacion',$idOrdenDeReparacion)->first();

        if(empty($salidaDeTrabajo) ){
            $salidaDeTrabajo = null;
        }

        if(empty($informeDeReparacion) ){
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
    }

    public function verContratoOrdenDeReparacion(int $idOrdenDeReparacion) {
        $ordenDeReparacion = $this->ordenDeReparacionModel->find($idOrdenDeReparacion);
        $contrato = view('contrato', ["ordenDeReparacion" => $ordenDeReparacion]);
        PDFHelper::mostrarPDF($contrato);
    }

}