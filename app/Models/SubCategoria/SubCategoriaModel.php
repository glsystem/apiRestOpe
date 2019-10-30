<?php


namespace App\Models\SubCategoria;


use Illuminate\Database\Eloquent\Model;

class SubCategoriaModel extends Model
{
    protected $table = 'subcategoria';

    protected $fillable = [
        'nome_subcategoria',
        'Id_categoria'
    ];

    public $timestamps = false;
}