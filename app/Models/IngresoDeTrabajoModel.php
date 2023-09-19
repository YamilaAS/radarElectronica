<?php

namespace app\Models;

use CodeIgniter\Model;
use function PHPUnit\Framework\isEmpty;
class IngresoDeTrabajoModel extends Model {
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

    public function ingresarTrabajo($datosParaGuardar){
        $ingresoDeTrabajo = $this->db->table('ingresoDeTrabajo');

        if($ingresoDeTrabajo->insert($datosParaGuardar) && $this->affectedRows() >0){
            return $this->db->insertID();
        }else {
            return false;
        }
    }

}