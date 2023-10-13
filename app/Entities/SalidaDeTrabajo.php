<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class SalidaDeTrabajo extends Entity {
    protected int $id;
    protected int $idOrdenDeReparacion;
    protected \DateTime $fechaSalida;
    protected \DateTime $fechaModificacion;
    protected string $condicion;

    protected $casts = [
        'id' => 'int',
        'idOrdenDeReparacion' => 'int',
        'fechaSalida' => 'datetime',
        'fechaModificacion'  => 'datetime',
    ];
}