<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/coba', 'Coba::about');

service('auth')->routes($routes);

$routes->get('/items', 'ItemController::index');
$routes->get('/items/create', 'ItemController::create');
$routes->post('/items/store', 'ItemController::store');
$routes->get('/items/edit/(:segment)', 'ItemController::edit/$1');
$routes->put('/items/update/(:segment)', 'ItemController::update/$1');
$routes->delete('/items/delete/(:segment)', 'ItemController::delete/$1');

