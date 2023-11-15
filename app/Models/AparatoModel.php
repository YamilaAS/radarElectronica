<?php

namespace app\Models;

use CodeIgniter\Model;

class AparatoModel extends Model {

    protected $table = 'aparato';

    protected $allowedFields = [

    ];

    protected $returnType    = \App\Entities\Aparato::class;

}