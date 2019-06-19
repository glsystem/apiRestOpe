<?php


namespace App\Repositories\Endereco;


use App\Models\Endereco\EnderecoModel;

class EnderecoRepositoryEloquent implements EnderecoRepositoryInterface
{

    private $model;

    public function __construct(EnderecoModel $enderecoModel)
    {
        $this->model = $enderecoModel;
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