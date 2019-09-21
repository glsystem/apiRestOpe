<?php

namespace App\Repositories\Produto;

use App\Models\Produto\ProdutoModel;

interface ProdutoRepositoryInterface
{
    public function __construct(ProdutoModel $produtoModel);

    public function getAll();
    public function get($id);
    public function store(array $request);
    public function update($id, array $request);
    public function destroy($id);
}