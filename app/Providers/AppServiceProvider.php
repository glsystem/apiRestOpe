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
            'App\Repositories\Funcionario\FuncionarioRepositoryInterface','App\Repositories\Funcionario\FuncionarioRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\Endereco\EnderecoRepositoryInterface','App\Repositories\Endereco\EnderecoRepositoryEloquent'
        );
    }
}
