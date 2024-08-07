<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/receba', 'Home::receba');
$routes->get('/showForm', 'Home::showForm');
$routes->get('/edit/(:num)', 'Home::edit/$1');
$routes->post('/update/(:num)', 'Home::update/$1');
$routes->post('delete/(:num)', 'Home::delete/$1');
$routes->get('/maisCaro', 'Home::maisCaro');
$routes->get('/maiorQuantidade', 'Home::maiorQuantidade');
$routes->post('/search', 'Home::search');
$routes->get('/databasetest', 'DatabaseTest::index');


