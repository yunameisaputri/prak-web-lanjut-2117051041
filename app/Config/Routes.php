<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\UserController;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/user/profile/(:any)/(:any)', 'UserController::profile/$1/$2');

#form
$routes->get ('/user/profile', [UserController::class, 'profile']);
$routes->get ('/user/create', [UserController::class, 'create']);
$routes->post ('/user/store', [UserController::class, 'store']);



