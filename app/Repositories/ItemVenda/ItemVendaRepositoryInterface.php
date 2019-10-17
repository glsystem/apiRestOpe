<?php

namespace App\Repositories\ItemVenda;

use App\Models\ItemVenda\ItemVendaModel;
use App\Models\Produto\ProdutoModel;

interface ItemVendaRepositoryInterface
{
    public function __construct(ItemVendaModel $produtoModel);

    public function getAll();
    public function get($id);
    public function store(array $request);
    public function update($id, array $request);
    public function destroy($id);
}