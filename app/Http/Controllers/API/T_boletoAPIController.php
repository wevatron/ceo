<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateT_boletoAPIRequest;
use App\Http\Requests\API\UpdateT_boletoAPIRequest;
use App\Models\T_boleto;
use App\Repositories\T_boletoRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;
use Illuminate\Support\Facades\Auth;

/**
 * Class T_boletoController
 * @package App\Http\Controllers\API
 */

class T_boletoAPIController extends AppBaseController
{
    /** @var  T_boletoRepository */
    private $tBoletoRepository;

    public function __construct(T_boletoRepository $tBoletoRepo)
    {
        $this->tBoletoRepository = $tBoletoRepo;
    }

    /**
     * Display a listing of the T_boleto.
     * GET|HEAD /tBoletos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $evento = 0;
        if ($request->evento) {
                $evento = $request->evento;
        }
        $tBoletos = T_boleto::where('usuario_id','=',$evento)
        ->with('Eventos')->get();

        return $this->sendResponse($tBoletos->toArray(), 'T Likes retrieved successfully');
    }

    /**
     * Store a newly created T_boleto in storage.
     * POST /tBoletos
     *
     * @param CreateT_boletoAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateT_boletoAPIRequest $request)
    {
        $input = $request->all();

        $tBoleto = $this->tBoletoRepository->create($input);

        return $this->sendResponse($tBoleto->toArray(), 'T Boleto saved successfully');
    }

    /**
     * Display the specified T_boleto.
     * GET|HEAD /tBoletos/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var T_boleto $tBoleto */
        $tBoleto = $this->tBoletoRepository->find($id);

        if (empty($tBoleto)) {
            return $this->sendError('T Boleto not found');
        }

        return $this->sendResponse($tBoleto->toArray(), 'T Boleto retrieved successfully');
    }

    /**
     * Update the specified T_boleto in storage.
     * PUT/PATCH /tBoletos/{id}
     *
     * @param int $id
     * @param UpdateT_boletoAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateT_boletoAPIRequest $request)
    {
        $input = $request->all();

        /** @var T_boleto $tBoleto */
        $tBoleto = $this->tBoletoRepository->find($id);

        if (empty($tBoleto)) {
            return $this->sendError('T Boleto not found');
        }

        $tBoleto = $this->tBoletoRepository->update($input, $id);

        return $this->sendResponse($tBoleto->toArray(), 'T_boleto updated successfully');
    }

    /**
     * Remove the specified T_boleto from storage.
     * DELETE /tBoletos/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var T_boleto $tBoleto */
        $tBoleto = $this->tBoletoRepository->find($id);

        if (empty($tBoleto)) {
            return $this->sendError('T Boleto not found');
        }

        $tBoleto->delete();

        return $this->sendSuccess('T Boleto deleted successfully');
    }
}
