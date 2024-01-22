<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->group('',['namespace' => 'App\Controllers\Front'], function($routes){
     $routes->get('/', 'Home::index',['as' =>'home']);
     
});

$routes->group('auth', ['namespace' => 'App\Controllers\Auth'], function ($routes) {
     $routes->get('registro', 'Register::index', ['as' => 'register']);
});