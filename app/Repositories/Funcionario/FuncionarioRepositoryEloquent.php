<?php

namespace App\Repositories\Funcionario;

use App\Models\Funcionario\FuncionarioModel;

class FuncionarioRepositoryEloquent implements FuncionarioRepositoryInterface
{

    private $model;

    public function __construct(FuncionarioModel $funcionarioModel)
    {
        $this->model = $funcionarioModel;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function get($id)
    {
        return $this->model->find($id);

//      return $this->model->where('first_name','LIKE',"%{$nome}%")->get(); -> Exemplo do eloquent com WHERE e Like
//      return $this->model->like('vinicius');
    }

    public function store(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        return $this->model->find($id)->update($data);
    }

    public function destroy($id)
    {
        return $this->model->find($id)->delete();
    }


}