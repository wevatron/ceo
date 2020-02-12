<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateC_tipo_eventoAPIRequest;
use App\Http\Requests\API\UpdateC_tipo_eventoAPIRequest;
use App\Models\C_tipo_evento;
use App\Repositories\C_tipo_eventoRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class C_tipo_eventoController
 * @package App\Http\Controllers\API
 */

class C_tipo_eventoAPIController extends AppBaseController
{
    /** @var  C_tipo_eventoRepository */
    private $cTipoEventoRepository;

    public function __construct(C_tipo_eventoRepository $cTipoEventoRepo)
    {
        $this->cTipoEventoRepository = $cTipoEventoRepo;
    }

    /**
     * Display a listing of the C_tipo_evento.
     * GET|HEAD /cTipoEventos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $cTipoEventos = $this->cTipoEventoRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($cTipoEventos->toArray(), 'C Tipo Eventos retrieved successfully');
    }

    /**
     * Store a newly created C_tipo_evento in storage.
     * POST /cTipoEventos
     *
     * @param CreateC_tipo_eventoAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateC_tipo_eventoAPIRequest $request)
    {
        $input = $request->all();

        $cTipoEvento = $this->cTipoEventoRepository->create($input);

        return $this->sendResponse($cTipoEvento->toArray(), 'C Tipo Evento saved successfully');
    }

    /**
     * Display the specified C_tipo_evento.
     * GET|HEAD /cTipoEventos/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var C_tipo_evento $cTipoEvento */
        $cTipoEvento = $this->cTipoEventoRepository->find($id);

        if (empty($cTipoEvento)) {
            return $this->sendError('C Tipo Evento not found');
        }

        return $this->sendResponse($cTipoEvento->toArray(), 'C Tipo Evento retrieved successfully');
    }

    /**
     * Update the specified C_tipo_evento in storage.
     * PUT/PATCH /cTipoEventos/{id}
     *
     * @param int $id
     * @param UpdateC_tipo_eventoAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateC_tipo_eventoAPIRequest $request)
    {
        $input = $request->all();

        /** @var C_tipo_evento $cTipoEvento */
        $cTipoEvento = $this->cTipoEventoRepository->find($id);

        if (empty($cTipoEvento)) {
            return $this->sendError('C Tipo Evento not found');
        }

        $cTipoEvento = $this->cTipoEventoRepository->update($input, $id);

        return $this->sendResponse($cTipoEvento->toArray(), 'C_tipo_evento updated successfully');
    }

    /**
     * Remove the specified C_tipo_evento from storage.
     * DELETE /cTipoEventos/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var C_tipo_evento $cTipoEvento */
        $cTipoEvento = $this->cTipoEventoRepository->find($id);

        if (empty($cTipoEvento)) {
            return $this->sendError('C Tipo Evento not found');
        }

        $cTipoEvento->delete();

        return $this->sendSuccess('C Tipo Evento deleted successfully');
    }
}
