<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateC_categoriaAPIRequest;
use App\Http\Requests\API\UpdateC_categoriaAPIRequest;
use App\Models\T_bazar;
use App\Models\C_categoria;
use App\Repositories\C_categoriaRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class C_categoriaController
 * @package App\Http\Controllers\API
 */

class C_categoriaAPIController extends AppBaseController
{
    /** @var  C_categoriaRepository */
    private $cCategoriaRepository;

    public function __construct(C_categoriaRepository $cCategoriaRepo)
    {
        $this->cCategoriaRepository = $cCategoriaRepo;
    }

    /**
     * Display a listing of the C_categoria.
     * GET|HEAD /cCategorias
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $cCategorias = C_categoria::with(['Bazares.Imagenes'])->paginate(2);

        return $this->sendResponse($cCategorias->toArray(), 'C Categorias retrieved successfully');
    }

    /**
     * Store a newly created C_categoria in storage.
     * POST /cCategorias
     *
     * @param CreateC_categoriaAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateC_categoriaAPIRequest $request)
    {
        $input = $request->all();

        $cCategoria = $this->cCategoriaRepository->create($input);

        return $this->sendResponse($cCategoria->toArray(), 'C Categoria saved successfully');
    }

    /**
     * Display the specified C_categoria.
     * GET|HEAD /cCategorias/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var C_categoria $cCategoria */
        $cCategoria = $this->cCategoriaRepository->find($id);

        if (empty($cCategoria)) {
            return $this->sendError('C Categoria not found');
        }

        return $this->sendResponse($cCategoria->toArray(), 'C Categoria retrieved successfully');
    }

    /**
     * Update the specified C_categoria in storage.
     * PUT/PATCH /cCategorias/{id}
     *
     * @param int $id
     * @param UpdateC_categoriaAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateC_categoriaAPIRequest $request)
    {
        $input = $request->all();

        /** @var C_categoria $cCategoria */
        $cCategoria = $this->cCategoriaRepository->find($id);

        if (empty($cCategoria)) {
            return $this->sendError('C Categoria not found');
        }

        $cCategoria = $this->cCategoriaRepository->update($input, $id);

        return $this->sendResponse($cCategoria->toArray(), 'C_categoria updated successfully');
    }

    /**
     * Remove the specified C_categoria from storage.
     * DELETE /cCategorias/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var C_categoria $cCategoria */
        $cCategoria = $this->cCategoriaRepository->find($id);

        if (empty($cCategoria)) {
            return $this->sendError('C Categoria not found');
        }

        $cCategoria->delete();

        return $this->sendSuccess('C Categoria deleted successfully');
    }
}
