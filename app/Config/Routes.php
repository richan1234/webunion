<?php

use App\Filters\AuthFilter;
use App\Filters\AdminAuthFilter;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'IndexController::index');

service('auth')->routes($routes);

$routes->group('', ['filter' => AdminAuthFilter::class], function ($routes) {
    $routes->group('admin', function ($routes) {
        $routes->get('dashboard', 'AdminController::dashboard');
    });
});


$routes->group('', ['filter' => AuthFilter::class], function ($routes) {
    $routes->group('home', function ($routes) {
        $routes->get('', 'HomeController::index');
        $routes->get('berita', 'HomeController::berita');
        $routes->get('detail_berita', 'HomeController::detail_berita');
        $routes->get('detail_lomba', 'HomeController::detail_lomba');
        $routes->get('kategori_akademik', 'HomeController::kategori_akademik');
        $routes->get('kategori_nonakademik', 'HomeController::kategori_nonakademik');
    });

    $routes->group('mahasiswa', function ($routes) {
        $routes->get('profile', 'MahasiswaController::profile');
        $routes->get('edit_profile', 'MahasiswaController::editProfile');
        $routes->get('profile_info_lomba', 'MahasiswaController::profileInfoLomba');
        $routes->get('profile_tim_lomba', 'MahasiswaController::profileTimLomba');
    });

    $routes->group('form', function ($routes) {
        $routes->get('form_lomba', 'FormController::form_lomba');
        $routes->get('form_tim', 'FormController::form_tim');
    });
});


$routes->group('auth', function ($routes) {
    $routes->post('mahasiswa/login', 'AuthController::mahasiswaLogin');
    $routes->post('admin/login', 'AuthController::adminLogin');
    $routes->get('mahasiswa/logout', 'AuthController::mahasiswaLogout');
});
