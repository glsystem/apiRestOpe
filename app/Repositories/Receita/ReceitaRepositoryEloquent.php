<?php


namespace App\Repositories\Receita;


use App\Models\Receita\ReceitaModel;
use Illuminate\Support\Facades\DB;

class ReceitaRepositoryEloquent implements ReceitaRepositoryInterface
{

    private $model;

    public function __construct(ReceitaModel $ReceitaModel)
    {
        $this->model = $ReceitaModel;
    }

    public function getAll()
    {
        return DB::select("select nome_receita, i.nome_ingrediente, ri.qtde as 'qtd_usada', m.tipo_medida  from glsystem_dois.item_receita  as ri
                                    inner join glsystem_dois.receita as r
                                    on r.id = ri.id_receita
                                    inner join glsystem_dois.ingrediente as i
                                    on i.id = ri.id_ingrediente
                                    inner join glsystem_dois.medida as m
                                    on m.id = i.id_medida
                                    order by nome_receita");
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