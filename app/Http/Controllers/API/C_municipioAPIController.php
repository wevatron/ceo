<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateC_municipioAPIRequest;
use App\Http\Requests\API\UpdateC_municipioAPIRequest;
use App\Models\C_municipio;
use App\Repositories\C_municipioRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class C_municipioController
 * @package App\Http\Controllers\API
 */

class C_municipioAPIController extends AppBaseController
{
    /** @var  C_municipioRepository */
    private $cMunicipioRepository;

    public function __construct(C_municipioRepository $cMunicipioRepo)
    {
        $this->cMunicipioRepository = $cMunicipioRepo;
    }

    /**
     * Display a listing of the C_municipio.
     * GET|HEAD /cMunicipios
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $municipios = C_municipio::selectRaw('id, clave, nombre, resp_id')->where('reps_id','=',$request->mun)->get();
        return $municipios;
    }

    /**
     * Store a newly created C_municipio in storage.
     * POST /cMunicipios
     *
     * @param CreateC_municipioAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateC_municipioAPIRequest $request)
    {
        $input = $request->all();

        $cMunicipio = $this->cMunicipioRepository->create($input);

        return $this->sendResponse($cMunicipio->toArray(), 'C Municipio saved successfully');
    }

    /**
     * Display the specified C_municipio.
     * GET|HEAD /cMunicipios/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var C_municipio $cMunicipio */
        $cMunicipio = $this->cMunicipioRepository->find($id);

        if (empty($cMunicipio)) {
            return $this->sendError('C Municipio not found');
        }

        return $this->sendResponse($cMunicipio->toArray(), 'C Municipio retrieved successfully');
    }

    /**
     * Update the specified C_municipio in storage.
     * PUT/PATCH /cMunicipios/{id}
     *
     * @param int $id
     * @param UpdateC_municipioAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateC_municipioAPIRequest $request)
    {
        $input = $request->all();

        /** @var C_municipio $cMunicipio */
        $cMunicipio = $this->cMunicipioRepository->find($id);

        if (empty($cMunicipio)) {
            return $this->sendError('C Municipio not found');
        }

        $cMunicipio = $this->cMunicipioRepository->update($input, $id);

        return $this->sendResponse($cMunicipio->toArray(), 'C_municipio updated successfully');
    }

    /**
     * Remove the specified C_municipio from storage.
     * DELETE /cMunicipios/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var C_municipio $cMunicipio */
        $cMunicipio = $this->cMunicipioRepository->find($id);

        if (empty($cMunicipio)) {
            return $this->sendError('C Municipio not found');
        }

        $cMunicipio->delete();

        return $this->sendSuccess('C Municipio deleted successfully');
    }
}
