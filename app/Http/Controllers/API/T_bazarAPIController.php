<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateT_bazarAPIRequest;
use App\Http\Requests\API\UpdateT_bazarAPIRequest;
use App\Models\T_bazar;
use App\Repositories\T_bazarRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class T_bazarController
 * @package App\Http\Controllers\API
 */

class T_bazarAPIController extends AppBaseController
{
    /** @var  T_bazarRepository */
    private $tBazarRepository;

    public function __construct(T_bazarRepository $tBazarRepo)
    {
        $this->tBazarRepository = $tBazarRepo;
    }

    /**
     * Display a listing of the T_bazar.
     * GET|HEAD /tBazars
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $tBazars = $this->tBazarRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($tBazars->toArray(), 'T Bazars retrieved successfully');
    }

    /**
     * Store a newly created T_bazar in storage.
     * POST /tBazars
     *
     * @param CreateT_bazarAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateT_bazarAPIRequest $request)
    {
        $input = $request->all();

        $tBazar = $this->tBazarRepository->create($input);

        return $this->sendResponse($tBazar->toArray(), 'T Bazar saved successfully');
    }

    /**
     * Display the specified T_bazar.
     * GET|HEAD /tBazars/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var T_bazar $tBazar */
        $tBazar = $this->tBazarRepository->find($id);

        if (empty($tBazar)) {
            return $this->sendError('T Bazar not found');
        }

        return $this->sendResponse($tBazar->toArray(), 'T Bazar retrieved successfully');
    }

    /**
     * Update the specified T_bazar in storage.
     * PUT/PATCH /tBazars/{id}
     *
     * @param int $id
     * @param UpdateT_bazarAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateT_bazarAPIRequest $request)
    {
        $input = $request->all();

        /** @var T_bazar $tBazar */
        $tBazar = $this->tBazarRepository->find($id);

        if (empty($tBazar)) {
            return $this->sendError('T Bazar not found');
        }

        $tBazar = $this->tBazarRepository->update($input, $id);

        return $this->sendResponse($tBazar->toArray(), 'T_bazar updated successfully');
    }

    /**
     * Remove the specified T_bazar from storage.
     * DELETE /tBazars/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var T_bazar $tBazar */
        $tBazar = $this->tBazarRepository->find($id);

        if (empty($tBazar)) {
            return $this->sendError('T Bazar not found');
        }

        $tBazar->delete();

        return $this->sendSuccess('T Bazar deleted successfully');
    }
}
