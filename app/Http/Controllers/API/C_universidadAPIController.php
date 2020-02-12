<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateC_universidadAPIRequest;
use App\Http\Requests\API\UpdateC_universidadAPIRequest;
use App\Models\C_universidad;
use App\Repositories\C_universidadRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class C_universidadController
 * @package App\Http\Controllers\API
 */

class C_universidadAPIController extends AppBaseController
{
    /** @var  C_universidadRepository */
    private $cUniversidadRepository;

    public function __construct(C_universidadRepository $cUniversidadRepo)
    {
        $this->cUniversidadRepository = $cUniversidadRepo;
    }

    /**
     * Display a listing of the C_universidad.
     * GET|HEAD /cUniversidads
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $cUniversidads = $this->cUniversidadRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($cUniversidads->toArray(), 'C Universidads retrieved successfully');
    }

    /**
     * Store a newly created C_universidad in storage.
     * POST /cUniversidads
     *
     * @param CreateC_universidadAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateC_universidadAPIRequest $request)
    {
        $input = $request->all();

        $cUniversidad = $this->cUniversidadRepository->create($input);

        return $this->sendResponse($cUniversidad->toArray(), 'C Universidad saved successfully');
    }

    /**
     * Display the specified C_universidad.
     * GET|HEAD /cUniversidads/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var C_universidad $cUniversidad */
        $cUniversidad = $this->cUniversidadRepository->find($id);

        if (empty($cUniversidad)) {
            return $this->sendError('C Universidad not found');
        }

        return $this->sendResponse($cUniversidad->toArray(), 'C Universidad retrieved successfully');
    }

    /**
     * Update the specified C_universidad in storage.
     * PUT/PATCH /cUniversidads/{id}
     *
     * @param int $id
     * @param UpdateC_universidadAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateC_universidadAPIRequest $request)
    {
        $input = $request->all();

        /** @var C_universidad $cUniversidad */
        $cUniversidad = $this->cUniversidadRepository->find($id);

        if (empty($cUniversidad)) {
            return $this->sendError('C Universidad not found');
        }

        $cUniversidad = $this->cUniversidadRepository->update($input, $id);

        return $this->sendResponse($cUniversidad->toArray(), 'C_universidad updated successfully');
    }

    /**
     * Remove the specified C_universidad from storage.
     * DELETE /cUniversidads/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var C_universidad $cUniversidad */
        $cUniversidad = $this->cUniversidadRepository->find($id);

        if (empty($cUniversidad)) {
            return $this->sendError('C Universidad not found');
        }

        $cUniversidad->delete();

        return $this->sendSuccess('C Universidad deleted successfully');
    }
}
