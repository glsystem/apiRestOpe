<?php

namespace App\Models\Endereco;

use Illuminate\Database\Eloquent\Model;

class EnderecoModel extends Model
{
    protected $table = 'endereco';

    protected $fillable = [
        'cidade',
        'estado',
        'cep',
        'endereco',
        'bairro',
        'numero',
        'complemento'
    ];

    public $timestamps = false;
}