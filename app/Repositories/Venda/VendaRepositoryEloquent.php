<?php


namespace App\Repositories\Venda;

use Illuminate\Support\Facades\DB;
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

        return DB::select("SELECT v.id as 'id', v.vlr_final as 'vlr_total', sum(iv.qtde) as 'qtde_items' FROM venda as v
                            INNER JOIN item_venda as iv
                            ON iv.id_venda = v.id
                            GROUP BY v.id");

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