<?php

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

$router->get("/v0/api/funcionario", "FuncionarioController@getAll");

$router->group(['prefix' => "/v0/api/funcionario"], function () use ($router){
    $router->get("/{id}", "FuncionarioController@get");
    $router->post("/", "FuncionarioController@store");
    $router->put("/{id}", "FuncionarioController@update");
    $router->delete("/{id}", "FuncionarioController@destroy");
});

$router->get("/v0/api/endereco", "EnderecoController@getAll");

$router->group(['prefix' => "/v0/api/endereco"], function () use ($router){
    $router->get("/{id}", "EnderecoController@get");
    $router->post("/", "EnderecoController@store");
    $router->put("/{id}", "EnderecoController@update");
    $router->delete("/{id}", "EnderecoController@destroy");
});

$router->get('/', function () use ($router) {
    return $router->app->version();
});