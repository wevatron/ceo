<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateC_horarioAPIRequest;
use App\Http\Requests\API\UpdateC_horarioAPIRequest;
use App\Models\C_horario;
use App\Repositories\C_horarioRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class C_horarioController
 * @package App\Http\Controllers\API
 */

class C_horarioAPIController extends AppBaseController
{
    /** @var  C_horarioRepository */
    private $cHorarioRepository;

    public function __construct(C_horarioRepository $cHorarioRepo)
    {
        $this->cHorarioRepository = $cHorarioRepo;
    }

    /**
     * Display a listing of the C_horario.
     * GET|HEAD /cHorarios
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $cHorarios = $this->cHorarioRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($cHorarios->toArray(), 'C Horarios retrieved successfully');
    }

    /**
     * Store a newly created C_horario in storage.
     * POST /cHorarios
     *
     * @param CreateC_horarioAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateC_horarioAPIRequest $request)
    {
        $input = $request->all();

        $cHorario = $this->cHorarioRepository->create($input);

        return $this->sendResponse($cHorario->toArray(), 'C Horario saved successfully');
    }

    /**
     * Display the specified C_horario.
     * GET|HEAD /cHorarios/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var C_horario $cHorario */
        $cHorario = $this->cHorarioRepository->find($id);

        if (empty($cHorario)) {
            return $this->sendError('C Horario not found');
        }

        return $this->sendResponse($cHorario->toArray(), 'C Horario retrieved successfully');
    }

    /**
     * Update the specified C_horario in storage.
     * PUT/PATCH /cHorarios/{id}
     *
     * @param int $id
     * @param UpdateC_horarioAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateC_horarioAPIRequest $request)
    {
        $input = $request->all();

        /** @var C_horario $cHorario */
        $cHorario = $this->cHorarioRepository->find($id);

        if (empty($cHorario)) {
            return $this->sendError('C Horario not found');
        }

        $cHorario = $this->cHorarioRepository->update($input, $id);

        return $this->sendResponse($cHorario->toArray(), 'C_horario updated successfully');
    }

    /**
     * Remove the specified C_horario from storage.
     * DELETE /cHorarios/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var C_horario $cHorario */
        $cHorario = $this->cHorarioRepository->find($id);

        if (empty($cHorario)) {
            return $this->sendError('C Horario not found');
        }

        $cHorario->delete();

        return $this->sendSuccess('C Horario deleted successfully');
    }
}
