<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateT_aprendeAPIRequest;
use App\Http\Requests\API\UpdateT_aprendeAPIRequest;
use App\Models\T_aprende;
use App\Repositories\T_aprendeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class T_aprendeController
 * @package App\Http\Controllers\API
 */

class T_aprendeAPIController extends AppBaseController
{
    /** @var  T_aprendeRepository */
    private $tAprendeRepository;

    public function __construct(T_aprendeRepository $tAprendeRepo)
    {
        $this->tAprendeRepository = $tAprendeRepo;
    }

    /**
     * Display a listing of the T_aprende.
     * GET|HEAD /tAprendes
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $tAprendes = $this->tAprendeRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($tAprendes->toArray(), 'T Aprendes retrieved successfully');
    }

    /**
     * Store a newly created T_aprende in storage.
     * POST /tAprendes
     *
     * @param CreateT_aprendeAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateT_aprendeAPIRequest $request)
    {
        $input = $request->all();

        $tAprende = $this->tAprendeRepository->create($input);

        return $this->sendResponse($tAprende->toArray(), 'T Aprende saved successfully');
    }

    /**
     * Display the specified T_aprende.
     * GET|HEAD /tAprendes/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var T_aprende $tAprende */
        $tAprende = $this->tAprendeRepository->find($id);

        if (empty($tAprende)) {
            return $this->sendError('T Aprende not found');
        }

        return $this->sendResponse($tAprende->toArray(), 'T Aprende retrieved successfully');
    }

    /**
     * Update the specified T_aprende in storage.
     * PUT/PATCH /tAprendes/{id}
     *
     * @param int $id
     * @param UpdateT_aprendeAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateT_aprendeAPIRequest $request)
    {
        $input = $request->all();

        /** @var T_aprende $tAprende */
        $tAprende = $this->tAprendeRepository->find($id);

        if (empty($tAprende)) {
            return $this->sendError('T Aprende not found');
        }

        $tAprende = $this->tAprendeRepository->update($input, $id);

        return $this->sendResponse($tAprende->toArray(), 'T_aprende updated successfully');
    }

    /**
     * Remove the specified T_aprende from storage.
     * DELETE /tAprendes/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var T_aprende $tAprende */
        $tAprende = $this->tAprendeRepository->find($id);

        if (empty($tAprende)) {
            return $this->sendError('T Aprende not found');
        }

        $tAprende->delete();

        return $this->sendSuccess('T Aprende deleted successfully');
    }
}
