<?php

namespace App\Controllers;
use App\Entities\Aparato;
use App\Models\AparatoModel;

class AparatoController extends BaseController
{
    private AparatoModel $aparatoModel;
    protected $helpers = ['form'];

    public function __construct() {
        $this->aparatoModel = new AparatoModel;
    }

    public function verIngresoDeAparato() {
        $aparatos = $this->aparatoModel->findAll();

        $datos = [
            "aparatos" => $aparatos
        ];

        return view('vistaListadoDeAparatos',  $datos);
    }

    public function procesarIngresoDeAparato() {
        $validacion = service('validation');
        $validacion->setRules([
            'nombre' => [
                'rules' => 'required|regex_match[/^[a-zñáéíóúüA-ZÑÁÉÍÓÚÜ 1234567890]*$/u]|min_length[1]|max_length[100]|is_unique[aparato.aparato]',
                'errors' => [
                    'required' => 'El campo aparato es obligatorio',
                    'min_length' => 'La longitud mínima  es 1',
                    'max_length' => 'La longitud máxima es 100',
                    'regex_match' => 'Solo puede ingresar letras, espacio, acento y números',
                    'is_unique' => 'Ya existe un aparato con ese nombre registrado'
                ],
            ]
            ]);

        if (!$validacion->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validacion->getErrors());
        }

        $nombre = (string)$this->request->getPost('nombre');

        $datosParaGuardar = array(
            'aparato' => $nombre
        );

        try {
            $aparato = new Aparato();
            $aparato->fill($datosParaGuardar);
            $idAparato = $this->aparatoModel->insert($datosParaGuardar);

        } catch (\ReflectionException $e) {
            throw new Exception($e);
            $error = "No se pudo guardar";
            $datos = array(
                'titulo' => $error
            );
            return view('vistaError', $datos);
        }

        return $this->listadoDeAparatos();
    }

    public function listadoDeAparatos(){
        $aparatos = $this->aparatoModel->findAll();

        $datos = [
            "aparatos" => $aparatos
        ];

        return view('vistaListadoDeAparatos',  $datos);
    }

    public function borrarAparato ($aparato){
        $resultado = $this->aparatoModel->where('aparato', $aparato)->first();
        if (isset($resultado) && $resultado != null) {
            $this->aparatoModel->where('aparato', $aparato)->delete();
        }

       return $this->verIngresoDeAparato();
    }

}