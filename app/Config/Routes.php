<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'IndexController::index');

$routes->group('admin', function ($routes) {
    $routes->get('dashboard', 'AdminController::dashboard');
});

$routes->group('home', function ($routes) {
    $routes->get('', 'HomeController::index');
    $routes->get('berita', 'HomeController::berita');
    $routes->get('detail_berita', 'HomeController::detail_berita');
    $routes->get('detail_lomba', 'HomeController::detail_lomba');
});
