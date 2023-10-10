<?php

namespace App\Controllers;
use App\Entities\OrdenDeReparacion;
use App\Models\OrdenDeReparacionModel;

class SalidaDeTrabajoController extends BaseController {

    private OrdenDeReparacionModel $ordenDeReparacionModel;

    public function __construct() {
        $this->ordenDeReparacionModel = new OrdenDeReparacionModel;
    }

    public function verSalidaDeTrabajo (int $idOrdenDeReparacion) {
        $ordenDeReparacion = $this->ordenDeReparacionModel->find($idOrdenDeReparacion);
        $datos = [
            "ordenDeReparacion" => $ordenDeReparacion,
            "linkContrato" => "/ordenDeReparacion/" . $idOrdenDeReparacion . "/contrato"

        ];
        return view('vistaSalidaDeTrabajo', $datos);
    }

    public function procesarSalidaDeTrabajo() {
        $validacion = service('validation');
        $validacion->setRules([
            'condicion' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El campo aparato es obligatorio'
                ]
            ]
        ]);

        if (!$validacion->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validacion->getErrors());
        }

        $condicion = (string)$this->request->getPost('condicion');
        $idOrdenDeReparacion = (int)$this->request->getPost('codigo');

        $datosParaGuardar = array(
            'condicion' => $condicion
        );

        $ordenDeReparacion = $this->ordenDeReparacionModel->find($idOrdenDeReparacion);
        $salidaOrdenDeReparacion = $this->ordenDeReparacionModel->update($idOrdenDeReparacion, $datosParaGuardar);
        var_dump($ordenDeReparacion);
        return 'ok';
    }
}