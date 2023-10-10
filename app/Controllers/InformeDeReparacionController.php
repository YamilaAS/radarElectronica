<?php

namespace App\Controllers;
use App\Models\ClienteModel;
use App\Entities\Cliente;
use App\Models\OrdenDeReparacionModel;

class InformeDeReparacionController extends BaseController{

    private OrdenDeReparacionModel $ordenDeReparacionModel;
    private ClienteModel $clienteModel;

    public function __construct() {
        $this->ordenDeReparacionModel = new OrdenDeReparacionModel;
        $this->clienteModel = new ClienteModel;
    }

    public function verInformeDeReparacion (int $idOrdenDeReparacion) {
        $ordenDeReparacion = $this->ordenDeReparacionModel->find($idOrdenDeReparacion);
        $cliente = $this->clienteModel->find($ordenDeReparacion->idCliente);

        $datos = [
            "cliente" => $cliente,
            "ordenDeReparacion" => $ordenDeReparacion,
            "linkContrato" => "/ordenDeReparacion/" . $idOrdenDeReparacion . "/contrato"

        ];
        return view('vistaInformeDeReparacion', $datos);
    }
}