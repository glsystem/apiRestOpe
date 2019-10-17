<?php

namespace App\Repositories\Receita;

use App\Models\Receita\ReceitaModel;

interface ReceitaRepositoryInterface
{
    public function __construct(ReceitaModel $ReceitaModel);

    public function getAll();
    public function get($id);
    public function store(array $request);
    public function update($id, array $request);
    public function destroy($id);
}