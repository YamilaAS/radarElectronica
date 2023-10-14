<?php

namespace App\Controllers;

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

    public function __construct() {
        $this->ordenDeReparacionModel = new OrdenDeReparacionModel;
        $this->clienteModel = new ClienteModel;
        $this->salidaDeTrabajoModel = new SalidaDeTrabajoModel;
    }

    public function verOrdenDeReparacion(int $idOrdenDeReparacion) {
        $ordenDeReparacion = $this->ordenDeReparacionModel->find($idOrdenDeReparacion);
        $cliente = $this->clienteModel->find($ordenDeReparacion->idCliente);
        $salidaDeTrabajo = $this->salidaDeTrabajoModel->where('idOrdenDeReparacion',$idOrdenDeReparacion)->first();

        if(empty($salidaDeTrabajo) ){
            $salidaDeTrabajo = null;
        }

        $datos = [
            "cliente" => $cliente,
            "ordenDeReparacion" => $ordenDeReparacion,
            "linkContrato" => "/ordenDeReparacion/" . $idOrdenDeReparacion . "/contrato",
            "salidaDeTrabajo" => $salidaDeTrabajo
        ];

        return view('vistaOrdenDeReparacion', $datos);
    }

    public function verContratoOrdenDeReparacion(int $idOrdenDeReparacion) {
        $ordenDeReparacion = $this->ordenDeReparacionModel->find($idOrdenDeReparacion);
        $cliente = $this->clienteModel->find($ordenDeReparacion->idCliente);
        $contrato = view('contrato', ["ordenDeReparacion" => $ordenDeReparacion, "cliente" => $cliente]);
        PDFHelper::mostrarPDF($contrato);
    }

}