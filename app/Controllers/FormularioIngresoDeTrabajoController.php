<?php

namespace App\Controllers;

use App\Models\IngresoDeTrabajoModel;



class FormularioIngresoDeTrabajoController extends BaseController {
    private IngresoDeTrabajoModel $ingresoDeTrabajoModel;
    public function __construct(){
        $this->ingresoDeTrabajoModel = new IngresoDeTrabajoModel;
    }

    public function formularioIngresoDeTrabajo() {
        $variable = 123;
        return view('formularioIngresoDeTrabajo');
    }

    public function guardar() {
        $aparato = (string)$this->request->getPost('aparato');
        $marca = (string)$this->request->getPost('marca');
        $modelo = (string)$this->request->getPost('modelo');
        $accesorios = (string)$this->request->getPost('accesorios');
        $titular = (string)$this->request->getPost('titular');
        $domicilio = (string)$this->request->getPost('domicilio');
        $telefono = (int)$this->request->getPost('telefono');
        $sintoma = (string)$this->request->getPost('sintoma');
        $senia = (float)$this->request->getPost('senia');

        $datosParaGuardar = array(
            'aparato' => $aparato,
            'marca' => $marca,
            'modelo' =>  $modelo,
            'accesorios' => $accesorios,
            'titular' => $titular,
            'domicilio' => $domicilio,
            'telefono' => $telefono,
            'sintoma' => $sintoma,
            'senia' => $senia
        );

        //modelo
        $trabajo = $this->ingresoDeTrabajoModel->ingresarTrabajo($datosParaGuardar);

        if($trabajo == false){
            print_r('no se pudo guardar');
        }
        return view('formularioDetalleDeOrden',   $datosParaGuardar);
    }

}