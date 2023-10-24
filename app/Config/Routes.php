<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'TodosController::getTodos');
$routes->post('/create-todo', 'TodosController::createTodo');
$routes->get('delete-todo/(:num)', 'TodosController::deleteTodo/$1');