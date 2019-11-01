<?php


namespace App\Models\Produto;


use Illuminate\Database\Eloquent\Model;

class ProdutoModel extends Model
{

    protected $table = 'produto';

    protected $fillable = [
        'id_receita',
        'Valor',
        'id_categoria'
    ];

    public $timestamps = false;
}