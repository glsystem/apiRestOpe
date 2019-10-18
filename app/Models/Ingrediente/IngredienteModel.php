<?php

namespace App\Models\Ingrediente;

use Illuminate\Database\Eloquent\Model;

class IngredienteModel extends Model
{
    protected $table = 'ingrediente';

    protected $fillable = [
        'nome_ingrediente',
        'id_medida'
    ];

    public $timestamps = false;
}