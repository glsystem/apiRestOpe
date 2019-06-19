<?php

namespace App\Models\Endereco;

use Illuminate\Database\Eloquent\Model;

class EnderecoModel extends Model
{
    protected $table = 'endereco';

    protected $fillable = [
        'cep',
        'logradouro',
        'cidade',
        'uf',
        'numero'
    ];

    public $timestamps = false;
}