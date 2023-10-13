<?php

namespace app\Models;

use CodeIgniter\Model;

class SalidaDeTrabajoModel extends Model {
    protected $table = 'salidaDeTrabajo';

    protected $allowedFields = [
        'condicion',
        'idOrdenDeReparacion'
    ];

    protected $returnType    = \App\Entities\SalidaDeTrabajo::class;
    protected $useTimestamps = true;
    protected $createdField  = 'fechaSalida';
    protected $updatedField  = 'fechaModificacion';
}