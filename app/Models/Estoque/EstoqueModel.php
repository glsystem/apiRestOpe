<?php

namespace App\Models\Estoque;

use Illuminate\Database\Eloquent\Model;

class EstoqueModel extends Model
{
    protected $table = 'estoque';

    protected $fillable = [
        'id_ingrediente',
        'qtd'
    ];

    public $timestamps = false;
}