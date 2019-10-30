<?php

namespace App\Models\Venda;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $table = 'venda';

    protected $fillable = [
        'id_funcionario',
        'vlr_final',
        'id_cliente'
    ];

    public $timestamps = false;
}