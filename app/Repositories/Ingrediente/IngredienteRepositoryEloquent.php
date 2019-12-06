<?php

namespace App\Repositories\Ingrediente;

use App\Models\Ingrediente\IngredienteModel;
use Illuminate\Support\Facades\DB;

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

    public function getIngredientWithName(){
        return DB::select("SELECT i.nome_ingrediente, e.qtde, m.tipo_medida FROM Estoque as e
                                    INNER JOIN ingrediente as i
                                    ON i.id = e.id_ingrediente
                                    INNER JOIN medida as m
                                    oN m.id = i.id_medida");
    }
}