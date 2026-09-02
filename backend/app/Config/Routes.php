<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('api/teste', 'Api::teste'); //Api -> Api.php; teste -> método dentro do arquivo.

$routes->get('api/login', 'AuthController::Index'); /*O react que aparece com essa uri "api/login",
Declaramos ela para o back poder fazer algo (ação) quando receber a requisição + URI*/
 