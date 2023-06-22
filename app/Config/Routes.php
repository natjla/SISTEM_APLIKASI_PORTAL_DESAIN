<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Aplikasi::index');

$routes->get('/cari', 'Aplikasi::cari');
$routes->get('/ajax_cari', 'Aplikasi::ajaxcari');

$routes->get('/desain', 'Aplikasi::desain');
$routes->get('/desain_data(:any)', 'Aplikasi::desaindata');

$routes->get('/anggota', 'Aplikasi::anggota');

// backend
$routes->get('/login', 'backend::index');
$routes->post('/proses_login_be', 'backend::prosesloginbe');

$routes->get('/dashboard', 'backend::dashboard');

$routes->get('/be_desain', 'backend::desain');
$routes->post('/be_proses_tambah_desain', 'backend::prosestambahdesain');
$routes->get('/be_edit_desain(:any)', 'backend::editdesain');
$routes->post('/be_proses_edit_desain(:any)', 'backend::proseseditdesain');
$routes->get('/be_hapus_desain(:any)', 'backend::hapusdesain');

$routes->get('/be_desain_data(:any)', 'backend::desaindata');
$routes->post('/be_proses_tambah_desain_data(:any)', 'backend::prosesdesaindata');
$routes->get('/be_edit_data_desain(:any)', 'backend::editdata');
$routes->post('/be_proses_edit_data_desain(:any)', 'backend::proseseditdata');
$routes->get('/be_hapus_data_desain(:any)', 'backend::hapusdatadesain');

$routes->get('/be_anggota', 'backend::anggota');
$routes->post('/be_proses_tambah_anggota(:any)', 'backend::prosestambahanggota');
$routes->get('/be_edit_anggota(:any)', 'backend::editanggota');
$routes->post('/be_proses_edit_anggota(:any)', 'backend::proseseditanggota');
$routes->get('/be_hapus_anggota(:any)', 'backend::hapusanggota');

$routes->get('/logout_be', 'backend::logout');

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
