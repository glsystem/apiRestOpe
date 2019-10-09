<?php

namespace App\Repositories\Fornecedor;

use App\Models\fornecedores\FornecedoresModel;

class FornecedorRepositoryEloquent implements FornecedorRepositoryInterface
{

    private $model;

    public function __construct(FornecedoresModel $fornecedoresModel)
    {
        $this->model = $fornecedoresModel;
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