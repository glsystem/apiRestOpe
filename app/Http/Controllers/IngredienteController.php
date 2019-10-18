<?php

namespace App\Http\Controllers;

use App\Exceptions\CustomValidationException;
use App\Models\CustomResponse;
use App\Services\IngredienteService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IngredienteController extends Controller
{
    private $service;
    private $customResponse;

    public function __construct(IngredienteService $IngredienteService)
    {
        $this->service = $IngredienteService;
        $this->customResponse = $response = new CustomResponse();
    }

    public function getAll()
    {
        try {

            return response()->json($this->customResponse->tratativeSucess(true, "", Response::HTTP_OK, null, null, $this->service->getAll()), Response::HTTP_OK);

        } catch (\Exception $e) {

            return response()->json($this->customResponse->trativeError(false, "Erro ao buscar os dados", Response::HTTP_INTERNAL_SERVER_ERROR, $e->getMessage(), null), Response::HTTP_INTERNAL_SERVER_ERROR);

        }
    }

    public function get($id)
    {
        try {

            return response()->json($this->customResponse->tratativeSucess(true, "", Response::HTTP_OK, null, null, $this->service->get($id)), Response::HTTP_CREATED);

        } catch (\Exception $e) {

            return response()->json($this->customResponse->trativeError(false, "Erro ao buscar os dados", Response::HTTP_INTERNAL_SERVER_ERROR, $e->getMessage(), null), Response::HTTP_INTERNAL_SERVER_ERROR);

        }
    }

    public function store(Request $request)
    {
        try {

            return response()->json($this->customResponse->tratativeSucess(true, "", Response::HTTP_OK, null, null, $this->service->store($request->all())), Response::HTTP_OK);

        } catch (CustomValidationException $e) {

            return response()->json($this->customResponse->trativeError(false, "Erro ao inserir os dados", Response::HTTP_INTERNAL_SERVER_ERROR, $e->getMessage(), $e->getDetails()), Response::HTTP_INTERNAL_SERVER_ERROR);

        } catch (\Exception $e) {

            return response()->json($this->customResponse->trativeError(false, "Erro ao inserir os dados", Response::HTTP_INTERNAL_SERVER_ERROR, $e->getMessage(), null), Response::HTTP_INTERNAL_SERVER_ERROR);

        }
    }

    public function update($id, Request $request)
    {
        try {

            return response()->json($this->customResponse->tratativeSucess(true, "", Response::HTTP_OK, null, null, $this->service->update($id, $request->all())), Response::HTTP_OK);

        } catch (CustomValidationException $e) {

            return response()->json($this->customResponse->trativeError(false, "Erro ao atualizar os dados", Response::HTTP_PRECONDITION_FAILED, $e->getMessage(), $e->getDetails()), Response::HTTP_PRECONDITION_FAILED);

        } catch (\Exception $e) {

            return response()->json($this->customResponse->trativeError(false, "Erro ao atualizar os dados", Response::HTTP_INTERNAL_SERVER_ERROR, $e->getMessage(), null), Response::HTTP_INTERNAL_SERVER_ERROR);

        }
    }

    public function destroy($id)
    {
        try {

            return response()->json($this->customResponse->tratativeSucess(true, "", Response::HTTP_OK, null, null, $this->service->detroy($id)), Response::HTTP_CREATED);

        } catch (\Exception $e) {

            return response()->json($this->customResponse->trativeError(false, "Erro ao deletar", Response::HTTP_INTERNAL_SERVER_ERROR, $e->getMessage(), null), Response::HTTP_INTERNAL_SERVER_ERROR);

        }
    }
}