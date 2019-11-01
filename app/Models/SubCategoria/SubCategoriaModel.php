<?php


namespace App\Models\Categoria;


use Illuminate\Database\Eloquent\Model;

class CategoriaModel extends Model
{
    protected $table = 'Categoria';

    protected $fillable = [
        'nome_Categoria',
        'Id_categoria'
    ];

    public $timestamps = false;
}