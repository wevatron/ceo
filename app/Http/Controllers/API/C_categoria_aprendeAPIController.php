<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateC_categoria_aprendeAPIRequest;
use App\Http\Requests\API\UpdateC_categoria_aprendeAPIRequest;
use App\Models\C_categoria_aprende;
use App\Repositories\C_categoria_aprendeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class C_categoria_aprendeController
 * @package App\Http\Controllers\API
 */

class C_categoria_aprendeAPIController extends AppBaseController
{
    /** @var  C_categoria_aprendeRepository */
    private $cCategoriaAprendeRepository;

    public function __construct(C_categoria_aprendeRepository $cCategoriaAprendeRepo)
    {
        $this->cCategoriaAprendeRepository = $cCategoriaAprendeRepo;
    }

    /**
     * Display a listing of the C_categoria_aprende.
     * GET|HEAD /cCategoriaAprendes
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $cCategoriaAprendes = C_categoria_aprende::with(['Bazares'])->paginate(5);

        return $this->sendResponse($cCategoriaAprendes->toArray(), 'C Categoria Aprendes retrieved successfully');
    }

    /**
     * Store a newly created C_categoria_aprende in storage.
     * POST /cCategoriaAprendes
     *
     * @param CreateC_categoria_aprendeAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateC_categoria_aprendeAPIRequest $request)
    {
        $input = $request->all();

        $cCategoriaAprende = $this->cCategoriaAprendeRepository->create($input);

        return $this->sendResponse($cCategoriaAprende->toArray(), 'C Categoria Aprende saved successfully');
    }

    /**
     * Display the specified C_categoria_aprende.
     * GET|HEAD /cCategoriaAprendes/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var C_categoria_aprende $cCategoriaAprende */
        $cCategoriaAprende = $this->cCategoriaAprendeRepository->find($id);

        if (empty($cCategoriaAprende)) {
            return $this->sendError('C Categoria Aprende not found');
        }

        return $this->sendResponse($cCategoriaAprende->toArray(), 'C Categoria Aprende retrieved successfully');
    }

    /**
     * Update the specified C_categoria_aprende in storage.
     * PUT/PATCH /cCategoriaAprendes/{id}
     *
     * @param int $id
     * @param UpdateC_categoria_aprendeAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateC_categoria_aprendeAPIRequest $request)
    {
        $input = $request->all();

        /** @var C_categoria_aprende $cCategoriaAprende */
        $cCategoriaAprende = $this->cCategoriaAprendeRepository->find($id);

        if (empty($cCategoriaAprende)) {
            return $this->sendError('C Categoria Aprende not found');
        }

        $cCategoriaAprende = $this->cCategoriaAprendeRepository->update($input, $id);

        return $this->sendResponse($cCategoriaAprende->toArray(), 'C_categoria_aprende updated successfully');
    }

    /**
     * Remove the specified C_categoria_aprende from storage.
     * DELETE /cCategoriaAprendes/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var C_categoria_aprende $cCategoriaAprende */
        $cCategoriaAprende = $this->cCategoriaAprendeRepository->find($id);

        if (empty($cCategoriaAprende)) {
            return $this->sendError('C Categoria Aprende not found');
        }

        $cCategoriaAprende->delete();

        return $this->sendSuccess('C Categoria Aprende deleted successfully');
    }
}
