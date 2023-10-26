<?php

namespace App\Controllers;

use App\Models\OrdenDeReparacionModel;
use App\Models\ClienteModel;

class BuscadorController extends BaseController{

    private OrdenDeReparacionModel $ordenDeReparacionModel;
    private ClienteModel $clienteModel;


    public function __construct() {
        $this->ordenDeReparacionModel = new OrdenDeReparacionModel;
        $this->clienteModel = new ClienteModel;
    }

    public function verBuscardor () {
        return view('vistaBuscador');
    }

    public function  procesarBuscador(){
        $apellidoCliente = (string)$this->request->getPost('cliente');
        $idOrdenDeReparacion = (int)$this->request->getPost('orden');

        $ordenDeReparacion = $this->ordenDeReparacionModel->find($idOrdenDeReparacion);
        $listaPorApellido = $this->clienteModel->where('apellido', $apellidoCliente)->find();
        var_dump($listaPorApellido);
    }

    public function  procesarBusquedaRapida(){
        $busquedaRapida = (string)$this->request->getPost('busquedaRapida');

        if(is_numeric($busquedaRapida)){

        $orden = (int)$busquedaRapida;
            return $this->buscarPorOrden($orden);
        }else {
            return 'falta implementar un string';
        }

    }


    public function  buscarPorOrden($idOrdenDeReparacion)
    {
        $ordenDeReparacion = $this->ordenDeReparacionModel->find($idOrdenDeReparacion);
        // si existe

        if ($ordenDeReparacion != null) {
            return redirect()->to('/ordenDeReparacion/' . $idOrdenDeReparacion);
        } else {
            return view('vistaOrdenNoEncontrada');
        }
    }

}