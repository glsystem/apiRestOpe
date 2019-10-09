<?php


namespace App\Models\Produto;


use Illuminate\Database\Eloquent\Model;

class ProdutoModel extends Model
{

    protected $table = 'Produto';

    protected $fillable = [
        'id_receita',
        'Valor',
        'id_categoria',
        'id_subcategoria'
    ];

    public $timestamps = false;
}