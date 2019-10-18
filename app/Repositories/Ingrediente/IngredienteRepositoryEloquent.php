<?php

namespace App\Repositories\Ingrediente;

use App\Models\Ingrediente\IngredienteModel;

class IngredienteRepositoryEloquent implements IngredienteRepositoryInterface
{

    private $model;

    public function __construct(IngredienteModel $IngredienteModel)
    {
        $this->model = $IngredienteModel;
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