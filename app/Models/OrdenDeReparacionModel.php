<?php

namespace app\Models;

use CodeIgniter\Model;

class OrdenDeReparacionModel extends Model {

    protected $table = 'ordenDeReparacion';

    protected $allowedFields = [
        'aparato',
        'marca',
        'modelo',
        'accesorios',
        'idCliente',
        'sintoma',
        'senia',
        'archivada'

    ];

    protected $returnType    = \App\Entities\OrdenDeReparacion::class;
    protected $useTimestamps = true;
    protected $createdField  = 'fechaIngreso';
    protected $updatedField  = 'fechaModificacion';

}