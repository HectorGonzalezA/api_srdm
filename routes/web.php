<?php

/** @var \Laravel\Lumen\Routing\Router $router */


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//***********//
// SRDM //
//***********// 

//Admin Users
$router->post('api/srdm/users/auth', ['uses' => 'AdminController@getTokenUsers']);
$router->get('api/srdm/showUsers', ['uses' => 'AdminController@showUsers']);
$router->post('api/srdm/createUsers', ['uses' => 'AdminController@createUsers']);
//Admin Clients
$router->post('api/srdm/clients/auth', ['uses' => 'AdminController@getTokenClients']);
$router->get('api/srdm/showClients', ['uses' => 'AdminController@showClients']);
$router->post('api/srdm/createClients', ['uses' => 'AdminController@createClients']); 
//Obtener Resumenes
$router->get('api/srdm/getResumenGestante/{rut}', ['uses' => 'SrdmController@getResumenGestante']);
$router->get('api/srdm/getResumenNino/{rut}', ['uses' => 'SrdmController@getResumenNino']);
//Recolector de información
$router->post('api/srdm/import/data', ['uses' => 'SrdmController@insertLogData']);


