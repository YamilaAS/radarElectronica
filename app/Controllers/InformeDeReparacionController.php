<?php

namespace App\Controllers;
use App\Models\ClienteModel;
use App\Entities\Cliente;
use App\Models\InformeDeReparacionModel;
use App\Entities\InformeDeReparacion;
use App\Models\OrdenDeReparacionModel;
use App\Models\SalidaDeTrabajoModel;

class InformeDeReparacionController extends BaseController{

    private OrdenDeReparacionModel $ordenDeReparacionModel;
    private ClienteModel $clienteModel;
    private SalidaDeTrabajoModel $salidaDeTrabajoModel;
    private InformeDeReparacionModel  $informeDeReparacionModel;
    protected $helpers = ['form'];

    public function __construct() {
        $this->ordenDeReparacionModel = new OrdenDeReparacionModel;
        $this->clienteModel = new ClienteModel;
        $this->salidaDeTrabajoModel = new SalidaDeTrabajoModel;
        $this->informeDeReparacionModel = new InformeDeReparacionModel;
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

    public function procesarInformeDeReparacion() {
        $validacion = service('validation');
        $validacion->setRules([
            'detalle' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'El campo detalle es obligatorio'
                ]
            ],
            'importe' => [
            'rules' => 'required|decimal',
            'errors' => [
                'required' => 'El campo importe es obligatorio',
                'decimal' => 'Solo puede ingresar números'
            ],
        ]
        ]);

        if (!$validacion->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validacion->getErrors());
        }

        $detalle = (string)$this->request->getPost('detalle');
        $importe = (int)$this->request->getPost('importe');
        $idOrdenDeReparacion = (int)$this->request->getPost('id');

        $datosParaGuardar = array (
            'detalle' => $detalle,
            'importe' => $importe,
            'idOrdenDeReparacion' => $idOrdenDeReparacion
        );

        $informeDeReparacion = new InformeDeReparacion();
        $informeDeReparacion->fill($datosParaGuardar);

        try{
            $idInformeDeReparacion = $this->informeDeReparacionModel->insert($datosParaGuardar);
        } catch (\ReflectionException $e) {
            throw $e;
            echo "No se pudo guardar";
        }

        $datosInformeDeReparacion = $this->informeDeReparacionModel->find($idInformeDeReparacion);
        $salidaDeTrabajo = $this->salidaDeTrabajoModel->where('idOrdenDeReparacion',$idOrdenDeReparacion)->first();
        $ordenDeReparacion = $this->ordenDeReparacionModel->find($idOrdenDeReparacion);
        $cliente = $this->clienteModel->find($ordenDeReparacion->idCliente);

        $datos = [
            "informeDeReparacion" => $datosInformeDeReparacion,
            "salidaDeTrabajo" => $salidaDeTrabajo,
            "cliente" => $cliente,
            "ordenDeReparacion" => $ordenDeReparacion,
            "linkContrato" => "/ordenDeReparacion/" . $idOrdenDeReparacion . "/contrato"
        ];

        return redirect()->to('/ordenDeReparacion/' . $idOrdenDeReparacion);
    }
}
