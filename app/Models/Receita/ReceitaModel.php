<?php

namespace App\Models\Receita;

use Illuminate\Database\Eloquent\Model;

class ReceitaModel extends Model
{
    protected $table = 'receita';

    protected $fillable = [
        'nome_receita'
    ];

    public $timestamps = false;
}