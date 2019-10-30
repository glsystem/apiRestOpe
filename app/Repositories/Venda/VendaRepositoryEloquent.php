<?php


namespace App\Repositories\Venda;

use App\Models\Venda\Venda;

class VendaRepositoryEloquent implements VendaRepositoryInterface
{

    private $model;

    public function __construct(Venda $venda)
    {
        $this->model = $venda;
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