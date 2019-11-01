<?php

namespace App\Repositories\SubCategoria;

use App\Models\SubCategoria\SubCategoriaModel;

class SubCategoriaRepositoryEloquent implements SubCategoriaRepositoryInterface
{

    private $model;

    public function __construct(SubCategoriaModel $subCategoriaModel)
    {
        $this->model = $subCategoriaModel;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function get($id)
    {
        return $this->model->find($id);
    }

    public function store(array $request)
    {
        return $this->model->create($request);
    }

    public function update($id, array $request)
    {
        return $this->model->find($id)->update($request);
    }

    public function destroy($id)
    {
        return $this->model->find($id)->delete();
    }
}