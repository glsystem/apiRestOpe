<?php
/**
 * Created by PhpStorm.
 * User: adriano
 * Date: 30/07/18
 * Time: 22:18
 */

namespace App\Models\Funcionario;

class ValidationFuncionario
{
    const RULE_FUNCIONARIO = [
        'rg' => 'required | max:15 | min:9',
        'cpf' => 'required',
    ];
}