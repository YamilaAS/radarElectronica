<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

//Ingreso de Trabajo
$routes->get('/ingresoDeTrabajo', 'IngresoDeTrabajoController::verIngresoDeTrabajo');
$routes->post('/ingresoDeTrabajo', 'IngresoDeTrabajoController::procesarIngresoDeTrabajo');

// Detalle de Orden de Reparacion
$routes->get('/ordenDeReparacion/(:num)', 'OrdenDeReparacionController::verOrdenDeReparacion/$1');
$routes->get('/ordenDeReparacion/(:num)/contrato', 'OrdenDeReparacionController::verContratoOrdenDeReparacion/$1');


//Informe de Reparación
$routes->get('/informeDeReparacion/(:num)', 'InformeDeReparacionController::verInformeDeReparacion/$1');
$routes->post('/ordenDeReparacion', 'InformeDeReparacionController::procesarInformeDeReparacion');

//Salida de trabajo
$routes->get('/salidaDeTrabajo/(:num)', 'SalidaDeTrabajoController::verSalidaDeTrabajo/$1');
$routes->post('/ordenDeReparacion', 'SalidaDeTrabajoController::procesarSalidaDeTrabajo');