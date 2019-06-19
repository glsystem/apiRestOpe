<?php

namespace App\Services;


use App\Exceptions\CustomValidationException;
use App\Models\Funcionario\ValidationFuncionario;
use App\Repositories\Funcionario\FuncionarioRepositoryInterface;
use Illuminate\Support\Facades\Validator;

class FuncionarioService
{

    private $repository;

    public function __construct(FuncionarioRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAll()
    {
        return $this->repository->getAll();
    }

    public function get($id)
    {
        return $this->repository->get($id);
    }

    public function store(array $request)
    {
        $validator = Validator::make($request, ValidationFuncionario::RULE_FUNCIONARIO);

        if ($validator->fails()) {
            throw new CustomValidationException('Falha na validação dos dados', [$validator->errors()],0);
        }

        return $this->repository->store($request);
    }

    public function update($id, array $request)
    {
        $validator = Validator::make($request, ValidationFuncionario::RULE_FUNCIONARIO);

        if ($validator->fails()) {
            throw new CustomValidationException('Falha na validação dos dados', [$validator->errors()],0);
        }

        return $this->repository->update($id, $request);
    }

    public function detroy($id)
    {
        return $this->repository->destroy($id);
    }

}