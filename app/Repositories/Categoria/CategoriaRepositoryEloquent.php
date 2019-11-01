<?php

namespace App\Repositories\Categoria;

use App\Models\Categoria\CategoriaModel;

class CategoriaRepositoryEloquent implements CategoriaRepositoryInterface
{

    private $model;

    public function __construct(CategoriaModel $CategoriaModel)
    {
        $this->model = $CategoriaModel;
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