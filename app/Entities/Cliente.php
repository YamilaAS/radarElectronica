<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Cliente extends Entity {
    protected int $id;
    protected string $apellido;
    protected string $nombre;
    protected string $domicilio;
    protected string $telefono;

    protected $casts = [
        'id'        => 'int',

    ];

}