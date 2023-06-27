<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// jika ada yang akses begini saja, maka defaultnya nanti akan diarahkan ke controller home method index
$routes->get('/', 'Pages::index');
// kalau ada yang akses controller coba method index maka nanti akan dia buka controller coba method index
// $routes->get('/coba/index', 'Coba::index');
// kalau ada yang buka controller coba method about maka akan dia buka controller coba method about
// $routes->get('/coba/about', 'Coba::about');
// kalau ada yang buka coba terus menambahkan parameter apapun nanti akan ditangkap sama place holder dan nnti akan dikirimkan ke controller coba method about
// $routes->get('/coba/(:any)', 'Coba::about/$1');

// kalau ada yang akses  users maka akan membuka namespace admin dan file users method index supaya kalau diketik users dia akan mencari di namespace karna defaultnya itu selalu mencari di controllers
// $routes->get('/users', 'Admin\Users::index');
//...

$routes->match(['get', 'post'], 'register', 'User::register', ['filter' => 'noauth']);
$routes->match(['get', 'post'], 'login', 'User::login', ['filter' => 'noauth']);
$routes->get('klub/index', 'Klub::index', ['filter' => 'auth']);

$routes->get('logout', 'User::logout');

//...


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
