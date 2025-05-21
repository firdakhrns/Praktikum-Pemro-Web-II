<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::login');
$routes->get('login', 'Auth::login');
$routes->post('login/proses', 'Auth::loginProses');
$routes->get('logout', 'Auth::logout');

$routes->group('buku', ['filter' => 'auth'], function($routes) {
    $routes->get('/', 'Buku::index');
    $routes->get('create', 'Buku::create');
    $routes->post('store', 'Buku::store');
    $routes->get('edit/(:num)', 'Buku::edit/$1');
    $routes->post('update/(:num)', 'Buku::update/$1');
    $routes->post('delete/(:num)', 'Buku::delete/$1');
});