<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

//Ingreso de Trabajo
$routes->get('/ingresoDeTrabajo', 'FormularioIngresoDeTrabajoController::formularioIngresoDeTrabajo');
$routes->post('/guardar', 'FormularioIngresoDeTrabajoController::guardar');

//Detalle de Orden de trabajo
