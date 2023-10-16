<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class InformeDeReparacion extends Entity {
    protected int $id;
    protected int $idOrdenDeReparacion;
    protected \DateTime $fechaReparacion;
    protected \DateTime $fechaModificacion;
    protected string $detalle;
    protected int $importe;

    protected $casts = [
        'id' => 'int',
        'idOrdenDeReparacion' => 'int',
        'fechaReparacion' => 'datetime',
        'fechaModificacion'  => 'datetime',
    ];
}