<?php

namespace App\Models\Estoque;

use Illuminate\Database\Eloquent\Model;

class EstoqueModel extends Model
{
    protected $table = 'Estoque';

    protected $fillable = [
        'id_ingrediente',
        'qtde'
    ];

    public $timestamps = false;
}