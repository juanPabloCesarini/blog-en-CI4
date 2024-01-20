<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->group('principal',['namespace' => 'App\Controllers\Front'], function($routes){
     $routes->get('/', 'Home::index');
     $routes->get('libreria', 'Home::sayHola');
});

