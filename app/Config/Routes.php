<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/fetchcontent','Home::allcontent');
$routes->get('/getresource/(:num)', 'Home::getresource/$1');
