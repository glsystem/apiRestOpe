<?php

namespace App\Models\Funcionario;

use Illuminate\Database\Eloquent\Model;

class FuncionarioModel extends Model
{

    protected $table = 'funcionario';

    protected $fillable = [
        'nome_completo',
        'dt_nascimento',
        'rg',
        'cpf',
        'id_Cargo',
        'dt_admissao',
        'salario',
        'contato',
        'id_endereco'
    ];

    public $timestamps = false;
}
