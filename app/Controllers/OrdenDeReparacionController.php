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
use Config\Database;

class OrdenDeReparacionController extends BaseController
{
    private OrdenDeReparacionModel $ordenDeReparacionModel;
    private ClienteModel $clienteModel;
    private SalidaDeTrabajoModel $salidaDeTrabajoModel;
    private InformeDeReparacionModel $informeDeReparacionModel;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->ordenDeReparacionModel = new OrdenDeReparacionModel;
        $this->clienteModel = new ClienteModel;
        $this->salidaDeTrabajoModel = new SalidaDeTrabajoModel;
        $this->informeDeReparacionModel = new InformeDeReparacionModel;
        $this->db = Database::connect();
    }

    public function verOrdenDeReparacion(int $idOrdenDeReparacion)
    {
        $ordenDeReparacion = $this->ordenDeReparacionModel->find($idOrdenDeReparacion);
        if ($ordenDeReparacion != null) {
            $cliente = $this->clienteModel->find($ordenDeReparacion->idCliente);
            $salidaDeTrabajo = $this->salidaDeTrabajoModel->where('idOrdenDeReparacion', $idOrdenDeReparacion)->first();
            $informeDeReparacion = $this->informeDeReparacionModel->where('idOrdenDeReparacion', $idOrdenDeReparacion)->first();

            if (empty($salidaDeTrabajo)) {
                $salidaDeTrabajo = null;
            }

            if (empty($informeDeReparacion)) {
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
        } else {
            $datos = array(
                'titulo' => 'Orden no encontrada'
            );
            return view('vistaError', $datos);
        }
    }

    public function verContratoOrdenDeReparacion(int $idOrdenDeReparacion)
    {
        $ordenDeReparacion = $this->ordenDeReparacionModel->find($idOrdenDeReparacion);
        $cliente = $this->clienteModel->find($ordenDeReparacion->idCliente);
        $contrato = view('contrato', ["ordenDeReparacion" => $ordenDeReparacion, "cliente" => $cliente]);
        PDFHelper::mostrarPDF($contrato);
    }

    public function borrarOrdenDeReparacion(int $idOrdenDeReparacion)
    {
        $this->db->transStart();

        $salidaDeTrabajo = $this->salidaDeTrabajoModel->where('idOrdenDeReparacion', $idOrdenDeReparacion)->first();
        if (isset($salidaDeTrabajo) && $salidaDeTrabajo != null) {
            $this->salidaDeTrabajoModel->where('idOrdenDeReparacion', $idOrdenDeReparacion)->delete();
        }

        if ($this->db->transFailure) {
            $this->db->transRollback();
            return "error al eliminar el informe de salida de trabajo ";
        } else {
            $informeDeReparacion = $this->informeDeReparacionModel->where('idOrdenDeReparacion', $idOrdenDeReparacion)->first();
            if (isset($informeDeReparacion) && $informeDeReparacion != null) {
                $this->informeDeReparacionModel->where('idOrdenDeReparacion', $idOrdenDeReparacion)->delete();
            }
            if ($this->db->transFailure) {
                $this->db->transRollback();
                return "error al eliminar el informe de reparación ";
            } else {
                $this->ordenDeReparacionModel->delete($idOrdenDeReparacion);

                $ok = $this->db->transComplete();
                if ($ok) {
                    return redirect()->to('/');
                } else {
                    return "error al intentar eliminar orden de reparacion" . $idOrdenDeReparacion;
                }
            }
        }
    }

    private function buscarOrdenDeReparacion(int $idOrdenDeReparacion)
    {
        $ordenDeReparacion = $this->ordenDeReparacionModel->find($idOrdenDeReparacion);
        if ($ordenDeReparacion != null) {
            $cliente = $this->clienteModel->find($ordenDeReparacion->idCliente);
            $salidaDeTrabajo = $this->salidaDeTrabajoModel->where('idOrdenDeReparacion', $idOrdenDeReparacion)->first();
            $informeDeReparacion = $this->informeDeReparacionModel->where('idOrdenDeReparacion', $idOrdenDeReparacion)->first();

            if (empty($salidaDeTrabajo)) {
                $salidaDeTrabajo = null;
            }

            if (empty($informeDeReparacion)) {
                $informeDeReparacion = null;
            }

            $datos = [
                "cliente" => $cliente,
                "ordenDeReparacion" => $ordenDeReparacion,
                "linkContrato" => "/ordenDeReparacion/" . $idOrdenDeReparacion . "/contrato",
                "salidaDeTrabajo" => $salidaDeTrabajo,
                "informeDeReparacion" => $informeDeReparacion
            ];

            return $datos;
        } else {
            $datos = array(
                'titulo' => 'Orden no encontrada'
            );
            return view('vistaError', $datos);
        }
    }

    public function modificarOrdenDeReparacion(int $idOrdenDeReparacion){
        $datosOrdenDeReparacion = $this->buscarOrdenDeReparacion($idOrdenDeReparacion);

        if ($datosOrdenDeReparacion != null) {
           return view('vistaModificarOrdenDeReparacion', $datosOrdenDeReparacion);
        } else {
            $datos = array(
                'titulo' => 'Orden No Encontrada'
            );
            return view('vistaError', $datos);
        }
    }



    public function procesarModificarOrdenDeReparacion()
    {
        $validacion = service('validation');
        $validacion->setRules([
            'aparato' => [
                'rules' => 'required|regex_match[/^[a-zñáéíóúüA-ZÑÁÉÍÓÚÜ 1234567890]*$/u]|min_length[1]|max_length[100]',
                'errors' => [
                    'required' => 'El campo aparato es obligatorio',
                    'min_length' => 'La longitud mínima  es 1',
                    'max_length' => 'La longitud máxima es 100',
                    'regex_match' => 'Solo puede ingresar letras, espacio, acento y números'
                ],
            ],
            'marca' => [
                'rules' => 'required|regex_match[/^[a-zñáéíóúüA-ZÑÁÉÍÓÚÜ 1234567890]*$/u]|min_length[1]|max_length[100]',
                'errors' => [
                    'required' => 'El campo marca es obligatorio',
                    'min_length' => 'La longitud mínima  es 1',
                    'max_length' => 'La longitud máxima es 100',
                    'regex_match' => 'Solo puede ingresar letras, espacio, acento y números'
                ],
            ],
            'modelo' => [
                'rules' => 'required|regex_match[/^[a-zñáéíóúüA-ZÑÁÉÍÓÚÜ 1234567890]*$/u]|min_length[1]|max_length[100]',
                'errors' => [
                    'required' => 'El campo modelo es obligatorio',
                    'min_length' => 'La longitud mínima  es 1',
                    'max_length' => 'La longitud máxima es 100',
                    'regex_match' => 'Solo puede ingresar letras, espacio, acento y números'
                ],
            ],
            'accesorios' => [
                'rules' => 'regex_match[/^[a-zñáéíóúüA-ZÑÁÉÍÓÚÜ 1234567890]*$/u]|max_length[100]',
                'errors' => [
                    'max_length' => 'La longitud máxima es 100',
                    'regex_match' => 'Solo puede ingresar letras, espacio, acento y números'
                ],
            ],
            'apellido' => [
                'rules' => 'required|regex_match[/^[a-zñáéíóúüA-ZÑÁÉÍÓÚÜ ]*$/u]|min_length[1]|max_length[100]',
                'errors' => [
                    'required' => 'El campo apellido del titular es obligatorio',
                    'min_length' => 'La longitud mínima  es 1',
                    'max_length' => 'La longitud máxima es 100',
                    'regex_match' => 'Solo puede ingresar letras, espacio y acento'
                ],
            ],
            'nombre' => [
                'rules' => 'required|regex_match[/^[a-zñáéíóúüA-ZÑÁÉÍÓÚÜ ]*$/u]|min_length[1]|max_length[100]',
                'errors' => [
                    'required' => 'El campo nombre del titular es obligatorio',
                    'min_length' => 'La longitud mínima  es 1',
                    'max_length' => 'La longitud máxima es 100',
                    'regex_match' => 'Solo puede ingresar letras, espacio y acento'
                ],
            ],
            'domicilio' => [
                'rules' => 'required|regex_match[/^[a-zñáéíóúüA-ZÑÁÉÍÓÚÜ 1234567890]*$/u]|min_length[1]|max_length[100]',
                'errors' => [
                    'required' => 'El campo domicilio es obligatorio',
                    'min_length' => 'La longitud mínima  es 1',
                    'max_length' => 'La longitud máxima es 100',
                    'regex_match' => 'Solo puede ingresar letras, espacio, acento y números'
                ],
            ],
            'telefono' => [
                'rules' => 'required|numeric|min_length[6]',
                'errors' => [
                    'required' => 'El campo teléfono es obligatorio',
                    'numeric' => 'Solo puede ser caracteres numéricos ',
                    'min_length' => 'La longitud mínima  es 6 números',
                ],
            ],
            'sintoma' => [
                'rules' => 'required|regex_match[/^[a-zñáéíóúüA-ZÑÁÉÍÓÚÜ 1234567890]*$/u]|min_length[1]|max_length[100]',
                'errors' => [
                    'required' => 'El campo síntoma es obligatorio',
                    'min_length' => 'La longitud mínima es 1',
                    'max_length' => 'La longitud máxima es 100',
                    'regex_match' => 'Solo puede ingresar letras, espacio, acento y números'
                ],
            ],
            'senia' => [
                'rules' => 'required|decimal',
                'errors' => [
                    'required' => 'El campo seña es obligatorio',
                    'decimal' => 'Solo puede ingresar números'
                ],
            ],
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
            ],
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

        $idOrdenDeReparacion = (int)$this->request->getPost('codigo');
        $aparato = (string)$this->request->getPost('aparato');
        $marca = (string)$this->request->getPost('marca');
        $modelo = (string)$this->request->getPost('modelo');
        $accesorios = (string)$this->request->getPost('accesorios');
        $idCliente = (int)$this->request->getPost('idCliente');
        $apellido = (string)$this->request->getPost('apellido');
        $nombre = (string)$this->request->getPost('nombre');
        $domicilio = (string)$this->request->getPost('domicilio');
        $telefono = (int)$this->request->getPost('telefono');
        $sintoma = (string)$this->request->getPost('sintoma');
        $senia = (float)$this->request->getPost('senia');
        $idInformeDeReparacion = (int)$this->request->getPost('idInformeDeReparacion');
        $detalle = (string)$this->request->getPost('detalle');
        $importe = (int)$this->request->getPost('importe');
        $idSalidaDeTrabajo = (int)$this->request->getPost('idSalidaDeTrabajo');
        $condicion = (string)$this->request->getPost('condicion');

        $datosParaGuardarCliente = array(
            'apellido' => $apellido,
            'nombre' => $nombre,
            'domicilio' => $domicilio,
            'telefono' => $telefono
        );

        $datosParaGuardarOrdenDeReparacion = array(
            'aparato' => $aparato,
            'marca' => $marca,
            'modelo' => $modelo,
            'accesorios' => $accesorios,
            'sintoma' => $sintoma,
            'senia' => $senia
        );

        $datosParaGuardarInformeDeReparacion = array (
            'detalle' => $detalle,
            'importe' => $importe
        );

        $datosParaGuardarInformeDeSalida = array (
            'condicion' => $condicion
        );

        $this->db->transStart();
        $this->clienteModel->update($idCliente, $datosParaGuardarCliente);

        if ($this->db->transFailure) {
            $this->db->transRollback();
            return "error insertando cliente";
        }

        $datosParaGuardarOrdenDeReparacion['idCliente'] = $idCliente;
        $this->ordenDeReparacionModel->update($idOrdenDeReparacion, $datosParaGuardarOrdenDeReparacion);

        if ($this->db->transFailure) {
            $this->db->transRollback();
            return "error actualizando los datos de la orden de reparación";
        }

        if(isset($idInformeDeReparacion) && $idInformeDeReparacion != null ){
            $this->informeDeReparacionModel->update($idInformeDeReparacion, $datosParaGuardarInformeDeReparacion);
        }

        if ($this->db->transFailure) {
            $this->db->transRollback();
            return "error actualizando los datos del informe de reparación";
        }

        if(isset($idSalidaDeTrabajo) && $idSalidaDeTrabajo != null ){
            $this->salidaDeTrabajoModel->update($idSalidaDeTrabajo, $datosParaGuardarInformeDeSalida);
        }

        if ($this->db->transFailure) {
            $this->db->transRollback();
            return "error actualizando los datos del informe de salida de trabajo";
        }

        $ok = $this->db->transComplete();
        if ($ok) {
            return redirect()->to('/ordenDeReparacion/' . $idOrdenDeReparacion);
        } else {
            return "error insertando orden de reparacion";
        }

    }

}