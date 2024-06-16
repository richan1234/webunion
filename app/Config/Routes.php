<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/test', 'Home::test');
$routes->get('/berita', 'Home::berita');

$routes->group('admin', function ($routes) {
    $routes->get('dashboard', 'AdminController::dashboard');
    // $routes->get('product/(:num)', 'AdminController::product/$1');
});
