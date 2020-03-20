<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateT_personaAPIRequest;
use App\Http\Requests\API\UpdateT_personaAPIRequest;
use App\Models\T_persona;
use App\Repositories\T_personaRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class T_personaController
 * @package App\Http\Controllers\API
 */

class T_personaAPIController extends AppBaseController
{
    /** @var  T_personaRepository */
    private $tPersonaRepository;

    public function __construct(T_personaRepository $tPersonaRepo)
    {
        $this->tPersonaRepository = $tPersonaRepo;
    }

    /**
     * Display a listing of the T_persona.
     * GET|HEAD /tPersonas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $tPersonas = $this->tPersonaRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($tPersonas->toArray(), 'T Personas retrieved successfully');
    }

    /**
     * Store a newly created T_persona in storage.
     * POST /tPersonas
     *
     * @param CreateT_personaAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateT_personaAPIRequest $request)
    {
        $input = $request->all();

        $tPersona = $this->tPersonaRepository->create($input);

        return $this->sendResponse($tPersona->toArray(), 'T Persona saved successfully');
    }

    /**
     * Display the specified T_persona.
     * GET|HEAD /tPersonas/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var T_persona $tPersona */
        $tPersona = $this->tPersonaRepository->find($id);

        if (empty($tPersona)) {
            return $this->sendError('T Persona not found');
        }

        return $this->sendResponse($tPersona->toArray(), 'T Persona retrieved successfully');
    }

    /**
     * Update the specified T_persona in storage.
     * PUT/PATCH /tPersonas/{id}
     *
     * @param int $id
     * @param UpdateT_personaAPIRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
   
        $input = $request->all();

        /** @var T_persona $tPersona */
        $tPersona = $this->tPersonaRepository->find($id);

        if (empty($tPersona)) {
            return $this->sendError('T Persona not found');
        }

        $tPersona = $this->tPersonaRepository->update($input, $id);

        return $this->sendResponse($tPersona->toArray(), 'T_persona updated successfully');
    }

    /**
     * Remove the specified T_persona from storage.
     * DELETE /tPersonas/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var T_persona $tPersona */
        $tPersona = $this->tPersonaRepository->find($id);

        if (empty($tPersona)) {
            return $this->sendError('T Persona not found');
        }

        $tPersona->delete();

        return $this->sendSuccess('T Persona deleted successfully');
    }
}
