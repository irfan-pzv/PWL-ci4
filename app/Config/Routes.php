<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/mitra', 'Home::getMitra');
$routes->get('/blog', 'Home::getBlog');
$routes->get('/indexkopok', 'Home::indexkopok');

$routes->group('layanan_lp', function($routes){
    $routes->get('pickup', 'LpLayananController::pickup');
    $routes->get('dropoff', 'LpLayananController::dropoff');
    $routes->get('company', 'LpLayananController::company');
    $routes->get('event', 'LpLayananController::event');
});

$routes->group('sampah_lp', function ($routes) {
    $routes->get('kertas', 'LpSampahController::kertas');
    $routes->get('plastik', 'LpSampahController::plastik');
    $routes->get('aluminium', 'LpSampahController::aluminium');
    $routes->get('logam', 'LpSampahController::logam');
    $routes->get('elektronik', 'LpSampahController::elektronik');
    $routes->get('kaca', 'LpSampahController::kaca');
    $routes->get('merek', 'LpSampahController::merek');
    $routes->get('khusus', 'LpSampahController::khusus');
    $routes->get('kesehatan', 'LpSampahController::kesehatan');
    $routes->get('tekstil', 'LpSampahController::tekstil');
});

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Auth');
$routes->setDefaultMethod('login');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

// Auth Routes
$routes->get('/login/(:segment)', 'Auth::login/$1');
$routes->post('/login', 'Auth::attemptLogin');
$routes->get('/logout', 'Auth::logout');

// Admin Routes
// $routes->group('admin', function ($routes) {
//     $routes->get('nasabah', 'AdminController::nasabahIndex');
//     $routes->get('nasabah/create', 'AdminController::nasabahCreate');
//     $routes->post('nasabah/create', 'AdminController::createNasabah');
//     $routes->get('nasabah/edit/(:segment)', 'AdminController::nasabahEdit/$1');
//     $routes->post('nasabah/update', 'AdminController::updateNasabah');
//     $routes->get('nasabah/delete/(:segment)', 'AdminController::deleteNasabah/$1');
// });
$routes->group('admin', function ($routes) {
    $routes->get('dashboard', 'AdminController::dashboard');
    $routes->get('nasabah', 'AdminController::nasabahIndex');
    $routes->get('nasabah/create', 'AdminController::nasabahCreate');
    $routes->post('nasabah/create', 'AdminController::createNasabah');
    $routes->get('nasabah/edit/(:segment)', 'AdminController::nasabahEdit/$1');
    $routes->post('nasabah/update', 'AdminController::updateNasabah');
    $routes->get('nasabah/delete/(:segment)', 'AdminController::deleteNasabah/$1');
});


// Dashboard Routes
$routes->get('/admin/dashboard', 'AdminController::dashboard');


// Nasabah Routes
$routes->get('/nasabah/login', 'NasabahController::loginForm');
$routes->post('/nasabah/login', 'NasabahController::login');
$routes->get('/nasabah/dashboard', 'NasabahController::dashboard');
$routes->get('/nasabah/history', 'NasabahController::history');
$routes->get('/nasabah/logout', 'NasabahController::logout'); // Tambahan route logout untuk nasabah

// Sampah Routes
$routes->get('/sampah', 'SampahController::index');
$routes->get('/sampah/create', 'SampahController::create');
$routes->post('/sampah/store', 'SampahController::store');
$routes->get('/sampah/edit/(:segment)', 'SampahController::edit/$1');
$routes->post('/sampah/update', 'SampahController::update');
$routes->get('/sampah/delete/(:segment)', 'SampahController::delete/$1');

// Setor Routes
$routes->get('/setor', 'SetorController::index');
$routes->get('/setor/create', 'SetorController::create');
$routes->post('/setor/store', 'SetorController::store');
$routes->get('/setor/delete/(:segment)', 'SetorController::delete/$1');

// Tarik Routes
$routes->get('/tarik', 'TarikController::index');
$routes->get('/tarik/create', 'TarikController::create');
$routes->post('/tarik/store', 'TarikController::store');
$routes->get('/tarik/delete/(:segment)', 'TarikController::delete/$1');