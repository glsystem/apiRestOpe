<?php


namespace App\Repositories\Receita;


use App\Models\Receita\ReceitaModel;

class ReceitaRepositoryEloquent implements ReceitaRepositoryInterface
{

    private $model;

    public function __construct(ReceitaModel $ReceitaModel)
    {
        $this->model = $ReceitaModel;
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