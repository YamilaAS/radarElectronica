<?php

namespace Models;

use CodeIgniter\Model;
use function PHPUnit\Framework\isEmpty;
class IngresoDeTrabajo extends Model {
    protected $table = 'ingresoDeTrabajo';
    protected $allowedFields = [
        'aparato',
        'marca',
        'modelo',
        'accesorios',
        'titular',
        'domicilio',
        'telefono',
        'sintoma',
        'senia'
    ];
    protected $returnType    = 'array';
    protected $useTimestamps = true;

    public function __construct() {
        $this->db = \Config\Database::connect();
    }

}