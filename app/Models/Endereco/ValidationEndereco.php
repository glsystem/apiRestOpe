<?php

namespace App\Models\Endereco;

class ValidationEndereco
{
    const RULE_ENDERECO = [
        'cep' => 'required | max:10 | min:6',
        'logradouro' => 'required',
        'cidade' => 'required',
        'uf' => 'required | max:5 | min:2',
        'numero' => 'required'
    ];
}