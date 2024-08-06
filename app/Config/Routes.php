<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('home', 'Shop::home');
$routes->get('businessHome', 'Shop::businessHome');
$routes->get('contact', 'Shop::contact');
$routes->get('shop', 'Shop::shop');
$routes->get('detail', 'Shop::detail');
$routes->get('cart', 'Shop::cart');
$routes->get('chackout', 'Shop::chackout');
$routes->get('error', 'Shop::error');

$routes->resource('company');
$routes->resource('user');
$routes->resource('subscriber');
$routes->resource('customers');
$routes->resource('suppliers');
$routes->resource('employees');
$routes->resource('subscriber_profile');
$routes->resource('document_type');




