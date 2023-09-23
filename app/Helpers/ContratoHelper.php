<?php

namespace App\Helpers;

use \App\Entities\OrdenDeReparacion;

class ContratoHelper
{
    public static function generarContrato(OrdenDeReparacion $ordenDeReparacion) : string {
        return "<h1>Orden de Reparacion</h1>" . $ordenDeReparacion->id;
    }
}