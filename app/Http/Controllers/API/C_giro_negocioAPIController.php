<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateC_giro_negocioAPIRequest;
use App\Http\Requests\API\UpdateC_giro_negocioAPIRequest;
use App\Models\C_ocupacion;
use App\Repositories\C_giro_negocioRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class C_giro_negocioController
 * @package App\Http\Controllers\API
 */

class C_giro_negocioAPIController extends AppBaseController
{
    /** @var  C_giro_negocioRepository */
    private $cGiroNegocioRepository;

    public function __construct(C_giro_negocioRepository $cGiroNegocioRepo)
    {
        $this->cGiroNegocioRepository = $cGiroNegocioRepo;
    }

    /**
     * Display a listing of the C_giro_negocio.
     * GET|HEAD /cGiroNegocios
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $cGiroNegocios = C_ocupacion::get();

        return $this->sendResponse($cGiroNegocios->toArray(), 'C Giro Negocios retrieved successfully');
    }

    /**
     * Store a newly created C_giro_negocio in storage.
     * POST /cGiroNegocios
     *
     * @param CreateC_giro_negocioAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateC_giro_negocioAPIRequest $request)
    {
        $input = $request->all();

        $cGiroNegocio = $this->cGiroNegocioRepository->create($input);

        return $this->sendResponse($cGiroNegocio->toArray(), 'C Giro Negocio saved successfully');
    }

    /**
     * Display the specified C_giro_negocio.
     * GET|HEAD /cGiroNegocios/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var C_giro_negocio $cGiroNegocio */
        $cGiroNegocio = $this->cGiroNegocioRepository->find($id);

        if (empty($cGiroNegocio)) {
            return $this->sendError('C Giro Negocio not found');
        }

        return $this->sendResponse($cGiroNegocio->toArray(), 'C Giro Negocio retrieved successfully');
    }

    /**
     * Update the specified C_giro_negocio in storage.
     * PUT/PATCH /cGiroNegocios/{id}
     *
     * @param int $id
     * @param UpdateC_giro_negocioAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateC_giro_negocioAPIRequest $request)
    {
        $input = $request->all();

        /** @var C_giro_negocio $cGiroNegocio */
        $cGiroNegocio = $this->cGiroNegocioRepository->find($id);

        if (empty($cGiroNegocio)) {
            return $this->sendError('C Giro Negocio not found');
        }

        $cGiroNegocio = $this->cGiroNegocioRepository->update($input, $id);

        return $this->sendResponse($cGiroNegocio->toArray(), 'C_giro_negocio updated successfully');
    }

    /**
     * Remove the specified C_giro_negocio from storage.
     * DELETE /cGiroNegocios/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var C_giro_negocio $cGiroNegocio */
        $cGiroNegocio = $this->cGiroNegocioRepository->find($id);

        if (empty($cGiroNegocio)) {
            return $this->sendError('C Giro Negocio not found');
        }

        $cGiroNegocio->delete();

        return $this->sendSuccess('C Giro Negocio deleted successfully');
    }
}
