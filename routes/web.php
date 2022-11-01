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

$router->get('/students', 'StudentController@index');
$router->post('/students', 'StudentController@store');
$router->get('/students/{student}', 'StudentController@show');
$router->put('/students/{student}', 'StudentController@update');
// $router->patch('/students/{student}', 'StudentController@update');
$router->delete('/students/{student}', 'StudentController@destroy');