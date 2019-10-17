<?php

namespace App\Repositories\Produto;

use App\Models\Produto\ProdutoModel;

class ProdutoRepositoryEloquent implements ProdutoRepositoryInterface
{

    private $model;

    public function __construct(ProdutoModel $produtoModel)
    {
        $this->model = $produtoModel;
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