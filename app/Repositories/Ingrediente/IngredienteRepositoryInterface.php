<?php

namespace App\Repositories\Ingrediente;

use App\Models\Ingrediente\IngredienteModel;

interface IngredienteRepositoryInterface
{
    public function __construct(IngredienteModel $IngredienteModel);

    public function getAll();
    public function get($id);
    public function store(array $request);
    public function update($id, array $request);
    public function destroy($id);
}