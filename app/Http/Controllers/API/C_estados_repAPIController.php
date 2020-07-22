<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateC_estados_repAPIRequest;
use App\Http\Requests\API\UpdateC_estados_repAPIRequest;
use App\Models\C_estados_rep;
use App\Repositories\C_estados_repRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class C_estados_repController
 * @package App\Http\Controllers\API
 */

class C_estados_repAPIController extends AppBaseController
{
    /** @var  C_estados_repRepository */
    private $cEstadosRepRepository;

    public function __construct(C_estados_repRepository $cEstadosRepRepo)
    {
        $this->cEstadosRepRepository = $cEstadosRepRepo;
    }

    /**
     * Display a listing of the C_estados_rep.
     * GET|HEAD /cEstadosReps
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $cEstadosReps = C_estados_rep::get();
        return $cEstadosReps;
        //return $this->sendResponse($cEstadosReps->toArray(), 'C Estados Reps retrieved successfully');
    }

    /**
     * Store a newly created C_estados_rep in storage.
     * POST /cEstadosReps
     *
     * @param CreateC_estados_repAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateC_estados_repAPIRequest $request)
    {
        $input = $request->all();

        $cEstadosRep = $this->cEstadosRepRepository->create($input);

        return $this->sendResponse($cEstadosRep->toArray(), 'C Estados Rep saved successfully');
    }

    /**
     * Display the specified C_estados_rep.
     * GET|HEAD /cEstadosReps/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var C_estados_rep $cEstadosRep */
        $cEstadosRep = $this->cEstadosRepRepository->find($id);

        if (empty($cEstadosRep)) {
            return $this->sendError('C Estados Rep not found');
        }

        return $this->sendResponse($cEstadosRep->toArray(), 'C Estados Rep retrieved successfully');
    }

    /**
     * Update the specified C_estados_rep in storage.
     * PUT/PATCH /cEstadosReps/{id}
     *
     * @param int $id
     * @param UpdateC_estados_repAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateC_estados_repAPIRequest $request)
    {
        $input = $request->all();

        /** @var C_estados_rep $cEstadosRep */
        $cEstadosRep = $this->cEstadosRepRepository->find($id);

        if (empty($cEstadosRep)) {
            return $this->sendError('C Estados Rep not found');
        }

        $cEstadosRep = $this->cEstadosRepRepository->update($input, $id);

        return $this->sendResponse($cEstadosRep->toArray(), 'C_estados_rep updated successfully');
    }

    /**
     * Remove the specified C_estados_rep from storage.
     * DELETE /cEstadosReps/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var C_estados_rep $cEstadosRep */
        $cEstadosRep = $this->cEstadosRepRepository->find($id);

        if (empty($cEstadosRep)) {
            return $this->sendError('C Estados Rep not found');
        }

        $cEstadosRep->delete();

        return $this->sendSuccess('C Estados Rep deleted successfully');
    }
}
