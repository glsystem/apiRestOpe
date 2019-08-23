<?php

namespace App\Repositories\Estoque;

use App\Models\Estoque\EstoqueModel;

interface EstoqueRepositoryInterface

{
    public function __construct(EstoqueModel $estoqueModel);

    public function getAll();
    public function get($id);
    public function store(array $request);
    public function update($id, array $request);
    public function destroy($id);
}
