<?php

namespace App\Controllers;
use App\Entities\OrdenDeReparacion;
use App\Entities\InformeDeReparacion;
use App\Models\InformeDeReparacionModel;
use App\Models\OrdenDeReparacionModel;
use App\Models\SalidaDeTrabajoModel;
use App\Entities\SalidaDeTrabajo;
use App\Models\ClienteModel;
use App\Entities\Cliente;

class SalidaDeTrabajoController extends BaseController {

    private OrdenDeReparacionModel $ordenDeReparacionModel;
    private SalidaDeTrabajoModel $salidaDeTrabajoModel;
    private ClienteModel $clienteModel;
    private InformeDeReparacionModel $informeDeReparacionModel;

    public function __construct() {
        $this->ordenDeReparacionModel = new OrdenDeReparacionModel;
        $this->salidaDeTrabajoModel = new SalidaDeTrabajoModel;
        $this->clienteModel = new ClienteModel;
        $this->informeDeReparacionModel = new InformeDeReparacionModel;
    }

    public function verSalidaDeTrabajo (int $idOrdenDeReparacion) {
        $ordenDeReparacion = $this->ordenDeReparacionModel->find($idOrdenDeReparacion);
        $cliente = $this->clienteModel->find($ordenDeReparacion->idCliente);
        $informeDeReparacion = $this->informeDeReparacionModel->where('idOrdenDeReparacion',$idOrdenDeReparacion)->first();

        if(empty($informeDeReparacion) ){
            $informeDeReparacion = null;
        }

        $datos = [
            "cliente" => $cliente,
            "ordenDeReparacion" => $ordenDeReparacion,
            "linkContrato" => "/ordenDeReparacion/" . $idOrdenDeReparacion . "/contrato",
            "informeDeReparacion" => $informeDeReparacion

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

        $datosParaGuardar = array (
            'idOrdenDeReparacion' => $idOrdenDeReparacion,
            'condicion' => $condicion
        );

        $salidaDeTrabajo = new SalidaDeTrabajo();
        $salidaDeTrabajo->fill($datosParaGuardar);

        try {
            $idSalidaDeTrabajo = $this->salidaDeTrabajoModel->insert($datosParaGuardar);
        } catch (\ReflectionException $e) {
            throw $e;
            echo "No se pudo guardar";
        }

        $datosSalidaDeTrabajo = $this->salidaDeTrabajoModel->find($idSalidaDeTrabajo);
        $ordenDeReparacion = $this->ordenDeReparacionModel->find($idOrdenDeReparacion);
        $cliente = $this->clienteModel->find($ordenDeReparacion->idCliente);

        $datos = [
            "salidaDeTrabajo" => $datosSalidaDeTrabajo,
            "cliente" => $cliente,
            "ordenDeReparacion" => $ordenDeReparacion,
            "linkContrato" => "/ordenDeReparacion/" . $idOrdenDeReparacion . "/contrato"
        ];

        return redirect()->to('/ordenDeReparacion/' . $idOrdenDeReparacion);
    }
}