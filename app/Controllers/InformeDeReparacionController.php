<?php

namespace App\Controllers;
use App\Models\OrdenDeReparacionModel;

class InformeDeReparacionController extends BaseController{

    private OrdenDeReparacionModel $ordenDeReparacionModel;

    public function __construct() {
        $this->ordenDeReparacionModel = new OrdenDeReparacionModel;
    }

    public function verInformeDeReparacion (int $idOrdenDeReparacion) {
        $ordenDeReparacion = $this->ordenDeReparacionModel->find($idOrdenDeReparacion);
        $datos = [
            "ordenDeReparacion" => $ordenDeReparacion,
            "linkContrato" => "/ordenDeReparacion/" . $idOrdenDeReparacion . "/contrato"

        ];
        return view('vistaInformeDeReparacion', $datos);
    }
}