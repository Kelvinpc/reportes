<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');



$routes->get('/reportes/r1','ReporteController::getReport1');
$routes->get('/reportes/r2','ReporteController::getReport2');
$routes->get('/reportes/r3','ReporteController::getReport3');
$routes->get('/reportes/r4/(:num)','ReporteController::getReport4/$1');

$routes->get('/reportes/filtrar','ReporteController::filtrar');

$routes->get('/reportes/showui','ReporteController::showUIReport');
$routes->post( '/reportes/publisher','ReporteController::getReportByPublisher');
$routes->post( '/reportes/racealignment','ReporteController::getReportByRaceAlignment');

$routes->get( '/dashboard/informe1','DashboardController::getInforme1');
