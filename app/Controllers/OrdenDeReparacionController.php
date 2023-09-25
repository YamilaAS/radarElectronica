<?php

namespace App\Controllers;

use App\Models\OrdenDeReparacionModel;
use App\Helpers\ContratoHelper;
use App\Helpers\PDFHelper;

class OrdenDeReparacionController extends BaseController{
    private OrdenDeReparacionModel $ordenDeReparacionModel;

    public function __construct() {
        $this->ordenDeReparacionModel = new OrdenDeReparacionModel;
    }

    public function verOrdenDeReparacion(int $idOrdenDeReparacion) {
        $ordenDeReparacion = $this->ordenDeReparacionModel->find($idOrdenDeReparacion);
        $datos = [
            "ordenDeReparacion" => $ordenDeReparacion,
            "linkContrato" => "/ordenDeReparacion/" . $idOrdenDeReparacion . "/contrato"
        ];
        return view('vistaOrdenDeReparacion', $datos);
    }

    public function verContratoOrdenDeReparacion(int $idOrdenDeReparacion) {
        $ordenDeReparacion = $this->ordenDeReparacionModel->find($idOrdenDeReparacion);
        $contrato = view('contrato', ["ordenDeReparacion" => $ordenDeReparacion]);
        PDFHelper::mostrarPDF($contrato);
    }

}