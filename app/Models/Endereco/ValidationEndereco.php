<?php

namespace App\Models\Endereco;

class ValidationEndereco
{
    const RULE_ENDERECO = [
        'cep' => 'required | max:10 | min:6',
        'cidade' => 'required',
        'numero' => 'required'
    ];
}