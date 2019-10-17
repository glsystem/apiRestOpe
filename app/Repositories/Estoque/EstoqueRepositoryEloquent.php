<?php

namespace App\Repositories\Estoque;

use App\Models\Estoque\EstoqueModel;

class EstoqueRepositoryEloquent implements EstoqueRepositoryInterface
{
    private $model;

    public function __construct(EstoqueModel $estoqueModel)
    {
        $this->model = $estoqueModel;
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