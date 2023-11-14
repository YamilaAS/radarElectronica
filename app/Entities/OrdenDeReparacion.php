<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;
class OrdenDeReparacion extends Entity
{
    protected int $id;
    protected \DateTime $fechaIngreso;
    protected \DateTime $fechaModificacion;
    protected string $aparato;
    protected string $marca;
    protected string $modelo;
    protected string $accesorios;
    protected string $titular;
    protected string $domicilio;
    protected string $telefono;
    protected string $sintoma;
    protected float $senia;
    protected string $archivada;


    protected $casts = [
        'id'        => 'int',
        'fechaIngreso' => 'datetime',
        'fechaModificacion'  => 'datetime',
    ];

}