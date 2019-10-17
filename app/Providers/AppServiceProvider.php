<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Funcionario\FuncionarioRepositoryInterface', 'App\Repositories\Funcionario\FuncionarioRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\Endereco\EnderecoRepositoryInterface','App\Repositories\Endereco\EnderecoRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\Estoque\EstoqueRepositoryInterface','App\Repositories\Estoque\EstoqueRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\Produto\ProdutoRepositoryInterface','App\Repositories\Produto\ProdutoRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\Fornecedor\FornecedorRepositoryInterface','App\Repositories\Fornecedor\FornecedorRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\Receita\ReceitaRepositoryInterface','App\Repositories\Receita\ReceitaRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\ItemVenda\ItemVendaRepositoryInterface','App\Repositories\ItemVenda\ItemVendaRepositoryEloquent'
        );
    }
}
