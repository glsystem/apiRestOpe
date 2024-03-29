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

$router->get("/v0/api/estoque", "EstoqueController@getAll");

$router->group(['prefix' => "/v0/api/estoque"], function () use ($router){
    $router->get("/{id}", "EstoqueController@get");
    $router->post("/", "EstoqueController@store");
    $router->put("/{id}", "EstoqueController@update");
    $router->delete("/{id}", "EstoqueController@destroy");
});

$router->get("/v0/api/produto", "ProdutoController@getAll");

$router->group(['prefix' => "/v0/api/produto"], function () use ($router){
    $router->get("/{id}", "ProdutoController@get");
    $router->post("/", "ProdutoController@store");
    $router->put("/{id}", "ProdutoController@update");
    $router->delete("/{id}", "ProdutoController@destroy");
});

$router->get("/v0/api/fornecedores", "FornecedorController@getAll");

$router->group(['prefix' => "/v0/api/fornecedores"], function () use ($router){
    $router->get("/{id}", "FornecedorController@get");
    $router->post("/", "FornecedorController@store");
    $router->put("/{id}", "FornecedorController@update");
    $router->delete("/{id}", "FornecedorController@destroy");
});

$router->get("/v0/api/receita", "ReceitaController@getAll");

$router->group(['prefix' => "/v0/api/receita"], function () use ($router){
    $router->get("/{id}", "ReceitaController@get");
    $router->post("/", "ReceitaController@store");
    $router->put("/{id}", "ReceitaController@update");
    $router->delete("/{id}", "ReceitaController@destroy");
});

$router->get("/v0/api/itemvenda", "ItemVendaController@getAll");

$router->group(['prefix' => "/v0/api/itemvenda"], function () use ($router){
    $router->get("/{id}", "ItemVendaController@get");
    $router->post("/", "ItemVendaController@store");
    $router->put("/{id}", "ItemVendaController@update");
    $router->delete("/{id}", "ItemVendaController@destroy");
});

$router->get("/v0/api/ingrediente", "IngredienteController@getAll");

$router->group(['prefix' => "/v0/api/ingrediente"], function () use ($router){
    $router->get("/{id}", "IngredienteController@get");
    $router->post("/", "IngredienteController@store");
    $router->put("/{id}", "IngredienteController@update");
    $router->delete("/{id}", "IngredienteController@destroy");
    $router->get("/IngredientWithName", "IngredienteController@getIngredientWithName");
});

$router->get("/v0/api/venda", "VendaController@getAll");

$router->group(['prefix' => "/v0/api/venda"], function () use ($router){
    $router->get("/{id}", "VendaController@get");
    $router->post("/", "VendaController@store");
    $router->put("/{id}", "VendaController@update");
    $router->delete("/{id}", "VendaController@destroy");
});

$router->get("/v0/api/subcat", "CategoriaController@getAll");

$router->group(['prefix' => "/v0/api/subcat"], function () use ($router){
    $router->get("/{id}", "CategoriaController@get");
    $router->post("/", "CategoriaController@store");
    $router->put("/{id}", "CategoriaController@update");
    $router->delete("/{id}", "CategoriaController@destroy");
});

$router->get('/', function () use ($router) {
    return $router->app->version();
});