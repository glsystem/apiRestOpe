<?php


namespace App\Models\ItemVenda;


use Illuminate\Database\Eloquent\Model;

class ItemVendaModel extends Model
{

    protected $table = 'item_venda';

    protected $fillable = [
        'id_venda',
        'id_produto',
        'qtde'
    ];

    public $timestamps = false;
}