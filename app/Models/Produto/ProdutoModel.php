<?php


namespace App\Models\Produto;


use Illuminate\Database\Eloquent\Model;

class ProdutoModel extends Model
{

    protected $table = 'Produto';

    protected $fillable = [
        'ID_Receita',
        'Valor',
        'ID_Categoria',
        'ID_Subcategoria'
    ];

    public $timestamps = false;
}