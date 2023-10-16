<?php

namespace app\Models;

use CodeIgniter\Model;

class InformeDeReparacionModel extends Model {
    protected $table = 'informeDeReparacion';

    protected $allowedFields = [
        'detalle',
        'importe',
        'idOrdenDeReparacion'
    ];

    protected $returnType    = \App\Entities\InformeDeReparacion::class;
    protected $useTimestamps = true;
    protected $createdField  = 'fechaReparacion';
    protected $updatedField  = 'fechaModificacion';


}