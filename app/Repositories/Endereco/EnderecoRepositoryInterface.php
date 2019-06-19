<?php

namespace App\Repositories\Endereco;

use App\Models\Endereco\EnderecoModel;

interface EnderecoRepositoryInterface
{
    public function __construct(EnderecoModel $enderecoModel);

    public function getAll();
    public function get($id);
    public function store(array $request);
    public function update($id, array $request);
    public function destroy($id);
}