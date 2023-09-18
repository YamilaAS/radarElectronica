<?php

namespace App\Controllers;

class FormularioIngresoDeTrabajo extends BaseController {

    public function formularioIngresoDeTrabajo() {
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

        return view('formularioDetalleDeOrden',   $datosParaGuardar);
    }

}