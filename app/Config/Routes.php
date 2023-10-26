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
$routes->get('/ordenDeReparacion/(:num)/informeDeReparacion', 'InformeDeReparacionController::verInformeDeReparacion/$1');
$routes->post('/informeDeReparacion', 'InformeDeReparacionController::procesarInformeDeReparacion');

//Salida de trabajo
$routes->get('/ordenDeReparacion/(:num)/salidaDeTrabajo', 'SalidaDeTrabajoController::verSalidaDeTrabajo/$1');
$routes->post('/salidaDeTrabajo', 'SalidaDeTrabajoController::procesarSalidaDeTrabajo');


//Buscar
$routes->get('/buscar', 'BuscadorController::verBuscardor');
$routes->post('/buscar', 'BuscadorController::procesarBuscador');

//Buscar
$routes->get('/busquedaRapida', 'BuscadorController::procesarBusquedaRapida');

