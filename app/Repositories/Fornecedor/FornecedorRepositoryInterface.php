<?php

namespace App\Repositories\Fornecedor;

use App\Models\fornecedores\FornecedoresModel;

interface FornecedorRepositoryInterface
{
    public function __construct(FornecedoresModel $fornecedoresModel);

    public function getAll();
    public function get($id);
    public function store(array $request);
    public function update($id, array $request);
    public function destroy($id);
}