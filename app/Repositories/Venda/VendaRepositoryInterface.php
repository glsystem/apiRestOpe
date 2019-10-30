<?php

namespace App\Repositories\Venda;


use App\Models\Venda\Venda;

interface VendaRepositoryInterface
{
    public function __construct(Venda $venda);

    public function getAll();
    public function get($id);
    public function store(array $request);
    public function update($id, array $request);
    public function destroy($id);
}