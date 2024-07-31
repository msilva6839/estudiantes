<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Página de inicio
$routes->get('/', 'EstudianteControlador::inicio');

// Rutas para estudiantes
$routes->get('/estudiantes', 'EstudianteControlador::index');
$routes->get('/estudiantes/listar', 'EstudianteControlador::listar');
$routes->get('/estudiantes/crear', 'EstudianteControlador::crear');
$routes->post('/estudiantes/guardar', 'EstudianteControlador::guardar');
$routes->get('/estudiantes/editar/(:num)', 'EstudianteControlador::editar/$1');
$routes->post('/estudiantes/actualizar/(:num)', 'EstudianteControlador::actualizar/$1');
$routes->get('/estudiantes/eliminar/(:num)', 'EstudianteControlador::eliminar/$1');