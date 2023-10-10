<?php

namespace app\Models;

use CodeIgniter\Model;

class ClienteModel extends Model {

    protected $table = 'clientes';

    protected $allowedFields = [
        'apellido',
        'nombre',
        'domicilio',
        'telefono'
    ];

    protected $returnType    = \App\Entities\Cliente::class;

}