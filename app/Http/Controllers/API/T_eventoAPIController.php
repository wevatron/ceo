<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateT_eventoAPIRequest;
use App\Http\Requests\API\UpdateT_eventoAPIRequest;
use App\Models\T_evento;
use App\Models\T_boleto;
use App\Repositories\T_eventoRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class T_eventoController
 * @package App\Http\Controllers\API
 */

class T_eventoAPIController extends AppBaseController
{
    /** @var  T_eventoRepository */
    private $tEventoRepository;

    public function __construct(T_eventoRepository $tEventoRepo)
    {
        $this->tEventoRepository = $tEventoRepo;
    }

    /**
     * Display a listing of the T_evento.
     * GET|HEAD /tEventos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $tEventos = T_evento::Buscar($request->busca)->get();

        return $this->sendResponse($tEventos->toArray(), 'Eventos retrieved successfully');
    }

    /**
     * Store a newly created T_evento in storage.
     * POST /tEventos
     *
     * @param CreateT_eventoAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateT_eventoAPIRequest $request)
    {
        $input = $request->all();

        $tEvento = $this->tEventoRepository->create($input);

        return $this->sendResponse($tEvento->toArray(), 'T Evento saved successfully');
    }

    /**
     * Display the specified T_evento.
     * GET|HEAD /tEventos/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id,Request $r)
    {
        if(!isset($r->us)){
            $r->us = 0;
        }
        /** @var T_evento $tEvento */
       // $tEvento = $this->tEventoRepository->find($id);
        $tEvento = T_evento::with('Imagenes')->find($id);
        $boleto = T_boleto::whereRaw("t_evento_id = $id and usuario_id = $r->us")->get();
        $boletos = T_boleto::whereRaw("t_evento_id = $id and estado_id = 1")->get();
        $tEvento->usados = count($boletos);
        $tEvento->cupoRestante = $tEvento->cupo - count($boletos) ;
  
        $tEvento->mio = count($boleto);
        if ($tEvento->mio > 0) {
            $tEvento->mioId = $boleto[0]->id;
        }
        
        
        if (empty($tEvento)) {
            return $this->sendError('T Evento not found');
        }

        return $this->sendResponse($tEvento->toArray(), 'T Evento retrieved successfully');
    }

    /**
     * Update the specified T_evento in storage.
     * PUT/PATCH /tEventos/{id}
     *
     * @param int $id
     * @param UpdateT_eventoAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateT_eventoAPIRequest $request)
    {
        $input = $request->all();

        /** @var T_evento $tEvento */
        $tEvento = $this->tEventoRepository->find($id);

        if (empty($tEvento)) {
            return $this->sendError('T Evento not found');
        }

        $tEvento = $this->tEventoRepository->update($input, $id);

        return $this->sendResponse($tEvento->toArray(), 'T_evento updated successfully');
    }

    /**
     * Remove the specified T_evento from storage.
     * DELETE /tEventos/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var T_evento $tEvento */
        $tEvento = $this->tEventoRepository->find($id);

        if (empty($tEvento)) {
            return $this->sendError('T Evento not found');
        }

        $tEvento->delete();

        return $this->sendSuccess('T Evento deleted successfully');
    }
}
