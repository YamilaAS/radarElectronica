<?php

namespace App\Controllers;

use App\Models\ClienteModel;
use App\Entities\Cliente;
use App\Models\OrdenDeReparacionModel;
use App\Entities\OrdenDeReparacion;

class IngresoDeTrabajoController extends BaseController {
    private OrdenDeReparacionModel $ordenDeReparacionModel;
    private ClienteModel $clienteModel;
    protected $helpers = ['form'];

    public function __construct() {
        $this->ordenDeReparacionModel = new OrdenDeReparacionModel;
        $this->clienteModel = new ClienteModel;
    }

    public function verIngresoDeTrabajo() {
        return view('vistaIngresoDeTrabajo');
    }

    public function procesarIngresoDeTrabajo() {
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
                    'required' => 'El campo nombre del titular es obligatorio',
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
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'El campo teléfono es obligatorio',
                    'numeric' => 'Solo puede ser caracteres numéricos '
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
            ]
        ]);

        if (!$validacion->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validacion->getErrors());
        }

        $aparato = (string)$this->request->getPost('aparato');
        $marca = (string)$this->request->getPost('marca');
        $modelo = (string)$this->request->getPost('modelo');
        $accesorios = (string)$this->request->getPost('accesorios');
        $apellido = (string)$this->request->getPost('apellido');
        $nombre = (string)$this->request->getPost('nombre');
        $domicilio = (string)$this->request->getPost('domicilio');
        $telefono = (int)$this->request->getPost('telefono');
        $sintoma = (string)$this->request->getPost('sintoma');
        $senia = (float)$this->request->getPost('senia');

        $datosParaGuardarCliente = array(
            'apellido' => $apellido,
            'nombre' => $nombre,
            'domicilio' => $domicilio,
            'telefono' => $telefono
        );

        $cliente = new Cliente();
        $cliente->fill($datosParaGuardarCliente);

        try {
            $idCliente = $this->clienteModel->insert($datosParaGuardarCliente);

            if(!empty($idCliente)) {
                $datosParaGuardarOrdenDeReparacion = array(
                    'aparato' => $aparato,
                    'marca' => $marca,
                    'modelo' => $modelo,
                    'accesorios' => $accesorios,
                    'sintoma' => $sintoma,
                    'senia' => $senia,
                    'idCliente' => $idCliente
                );

                $ordenDeReparacion = new OrdenDeReparacion();
                $ordenDeReparacion->fill($datosParaGuardarOrdenDeReparacion);

                try {
                    $idNuevaOrdenDeReparacion = $this->ordenDeReparacionModel->insert($datosParaGuardarOrdenDeReparacion);
                    return redirect()->to('/ordenDeReparacion/' . $idNuevaOrdenDeReparacion);
                } catch (\ReflectionException $e) {
                    throw $e;
                }
            }else {
                echo "el id del cliente esta vacio";
            }
        } catch (\ReflectionException $e) {
            throw $e;
        }
    }
}