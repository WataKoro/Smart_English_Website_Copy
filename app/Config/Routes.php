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
$routes->get('/', 'Home::index');
$routes->get('/login', 'Login::index');
$routes->get('/register', 'Register::index');
$routes->get('/register_eng', 'Register_eng::index');
$routes->get('/about', 'About::index');
$routes->get('/article', 'Article::index');
$routes->get('/contact', 'Contact::index');
$routes->get('/profile', 'Profile::index');
$routes->get('/success', 'Success::index');

// 
// admin routes
// 
$routes->get('/admin', 'Admin_Login::index');
$routes->get('/admin/login', 'Admin_Login::index');
$routes->post('/admin/login/process', 'Admin_Login::process');
$routes->get('/admin/logout', 'Admin_Login::logout');

$routes->get('/admin/statistik', 'Admin_Artikel::index_statistik', ['filters' => 'auth']);
$routes->get('/admin/akunAdmin', 'Admin::admin_infoAkun', ['filters' => 'auth']);
// $routes->get('/admin/testimoni', 'Admin::admin_testi', ['filters' => 'auth']);
// $routes->get('/admin/organisasi', 'Admin::admin_organisasi', ['filters' => 'auth']);
$routes->get('/admin/dashboard', 'Admin_Artikel::index', ['filters' => 'auth']);
$routes->get('/admin/registrasi', 'Admin_Registrasi::index', ['filters' => 'auth']);


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
