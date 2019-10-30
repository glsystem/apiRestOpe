<?php

namespace App\Repositories\SubCategoria;

use App\Models\SubCategoria\SubCategoriaModel;

interface SubCategoriaRepositoryInterface
{
    public function __construct(SubCategoriaModel $subCategoriaModel);

    public function getAll();
    public function get($id);
    public function store(array $request);
    public function update($id, array $request);
    public function destroy($id);
}