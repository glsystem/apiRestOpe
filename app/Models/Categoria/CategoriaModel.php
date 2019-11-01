<?php


namespace App\Models\Categoria;


use Illuminate\Database\Eloquent\Model;

class CategoriaModel extends Model
{
    protected $table = 'categoria';

    protected $fillable = [
        'nome_categoria',
        'Id_categoria'
    ];

    public $timestamps = false;
}