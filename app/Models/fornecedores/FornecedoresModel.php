<?php

namespace App\Models\fornecedores;

use Illuminate\Database\Eloquent\Model;

class FornecedoresModel extends Model
{

    protected $table = 'fornecedor';

    protected $fillable = [
        'cnpj',
        'nome_fornecedor',
        'nome_fantasia',
        'e_mail',
        'cep',
        'contato',
        'celular',
        'nome_contato',
        'id_clas_fornecedor',
        'id_endereco'
    ];

    public $timestamps = false;
}