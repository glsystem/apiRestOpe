<?php

namespace App\Repositories\Funcionario;

use App\Models\Funcionario\FuncionarioModel;

interface FuncionarioRepositoryInterface
{
    public function __construct(FuncionarioModel $funcionarioModel);

    public function getAll();
    public function get($id);
    public function store(array $request);
    public function update($id, array $request);
    public function destroy($id);
}