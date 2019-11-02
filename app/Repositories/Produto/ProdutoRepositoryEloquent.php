<?php

namespace App\Repositories\Produto;

use App\Models\Produto\ProdutoModel;
use Illuminate\Support\Facades\DB;

class ProdutoRepositoryEloquent implements ProdutoRepositoryInterface
{

    private $model;

    public function __construct(ProdutoModel $produtoModel)
    {
        $this->model = $produtoModel;
    }

    public function getAll()
    {
        ##return $this->model->all();
        
        // return $$this->model->addSelect("select r.nome_receita, ri.qtde, p.valor, sb.nome_categoria from glsystem.produto as p 
        // inner join glsystem.item_receita as ri
        // on p.id_receita = ri.id
        // inner join glsystem.receita as r
        // on r.id = ri.id_receita
        // inner join glsystem.categoria as sb
        // on sb.id = p.id_categoria;")->get();

        return  DB::table('produto')
            ->join('item_receita', 'item_receita.id', '=', 'produto.id_receita')
            ->join('receita', 'receita.id', '=', 'produto.id_receita')
            ->join('categoria', 'categoria.id', '=', 'produto.id_categoria')
            ->select('produto.*', 'receita.nome_receita', 'produto.valor', 'item_receita.qtde','categoria.nome_categoria')
            ->get();
    
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