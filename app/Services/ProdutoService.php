<?php

namespace App\Services;

use App\Exceptions\CustomValidationException;
use App\Models\Endereco\ValidationEndereco;
use App\Repositories\Produto\ProdutoRepositoryInterface;
use Illuminate\Support\Facades\Validator;

class ProdutoService
{
    private $repository;

    public function __construct(ProdutoRepositoryInterface $repository)
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
//        $validator = Validator::make($request, ValidationEndereco::RULE_ENDERECO);
//
//        if ($validator->fails()) {
//            throw new CustomValidationException('Falha na validação dos dados', [$validator->errors()],0);
//        }
        return $this->repository->store($request);
    }

    public function update($id, array $request)
    {
        return $this->repository->update($id, $request);
    }

    public function detroy($id)
    {
        return $this->repository->destroy($id);
    }
}