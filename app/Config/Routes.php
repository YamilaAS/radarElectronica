<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

//Ingreso de Trabajo
$routes->get('/ingresoDeTrabajo', 'FormularioIngresoDeTrabajo::formularioIngresoDeTrabajo');
$routes->post('/guardar', 'FormularioIngresoDeTrabajo::guardar');

//Detalle de Orden de trabajo
