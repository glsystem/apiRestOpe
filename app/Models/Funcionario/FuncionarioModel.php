<?php

namespace App\Models\Funcionario;

use Illuminate\Database\Eloquent\Model;

class FuncionarioModel extends Model
{

    protected $table = 'funcionario';

    protected $fillable = [
        'idEndereco',
        'nome',
        'rg',
        'cpf',
        'telefone',
        'salario',
        'cargo',
        'dtNasc',
        'dtAdimicao',
        'senha'
    ];

    public $timestamps = false;
}
