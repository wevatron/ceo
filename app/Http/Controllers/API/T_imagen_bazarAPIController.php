<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateT_imagen_bazarAPIRequest;
use App\Http\Requests\API\UpdateT_imagen_bazarAPIRequest;
use App\Models\T_imagen_bazar;
use App\Repositories\T_imagen_bazarRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class T_imagen_bazarController
 * @package App\Http\Controllers\API
 */

class T_imagen_bazarAPIController extends AppBaseController
{
    /** @var  T_imagen_bazarRepository */
    private $tImagenBazarRepository;

    public function __construct(T_imagen_bazarRepository $tImagenBazarRepo)
    {
        $this->tImagenBazarRepository = $tImagenBazarRepo;
    }

    /**
     * Display a listing of the T_imagen_bazar.
     * GET|HEAD /tImagenBazars
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $tImagenBazars = $this->tImagenBazarRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($tImagenBazars->toArray(), 'T Imagen Bazars retrieved successfully');
    }

    /**
     * Store a newly created T_imagen_bazar in storage.
     * POST /tImagenBazars
     *
     * @param CreateT_imagen_bazarAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateT_imagen_bazarAPIRequest $request)
    {
        $input = $request->all();

        $tImagenBazar = $this->tImagenBazarRepository->create($input);

        return $this->sendResponse($tImagenBazar->toArray(), 'T Imagen Bazar saved successfully');
    }

    /**
     * Display the specified T_imagen_bazar.
     * GET|HEAD /tImagenBazars/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var T_imagen_bazar $tImagenBazar */
        $tImagenBazar = $this->tImagenBazarRepository->find($id);

        if (empty($tImagenBazar)) {
            return $this->sendError('T Imagen Bazar not found');
        }

        return $this->sendResponse($tImagenBazar->toArray(), 'T Imagen Bazar retrieved successfully');
    }

    /**
     * Update the specified T_imagen_bazar in storage.
     * PUT/PATCH /tImagenBazars/{id}
     *
     * @param int $id
     * @param UpdateT_imagen_bazarAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateT_imagen_bazarAPIRequest $request)
    {
        $input = $request->all();

        /** @var T_imagen_bazar $tImagenBazar */
        $tImagenBazar = $this->tImagenBazarRepository->find($id);

        if (empty($tImagenBazar)) {
            return $this->sendError('T Imagen Bazar not found');
        }

        $tImagenBazar = $this->tImagenBazarRepository->update($input, $id);

        return $this->sendResponse($tImagenBazar->toArray(), 'T_imagen_bazar updated successfully');
    }

    /**
     * Remove the specified T_imagen_bazar from storage.
     * DELETE /tImagenBazars/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var T_imagen_bazar $tImagenBazar */
        $tImagenBazar = $this->tImagenBazarRepository->find($id);

        if (empty($tImagenBazar)) {
            return $this->sendError('T Imagen Bazar not found');
        }

        $tImagenBazar->delete();

        return $this->sendSuccess('T Imagen Bazar deleted successfully');
    }
}
