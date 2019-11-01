<?php

namespace App\Repositories\Categoria;

use App\Models\Categoria\CategoriaModel;

interface CategoriaRepositoryInterface
{
    public function __construct(CategoriaModel $CategoriaModel);

    public function getAll();
    public function get($id);
    public function store(array $request);
    public function update($id, array $request);
    public function destroy($id);
}