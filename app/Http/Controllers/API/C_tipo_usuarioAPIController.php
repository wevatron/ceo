<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateC_tipo_usuarioAPIRequest;
use App\Http\Requests\API\UpdateC_tipo_usuarioAPIRequest;
use App\Models\C_tipo_usuario;
use App\Repositories\C_tipo_usuarioRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class C_tipo_usuarioController
 * @package App\Http\Controllers\API
 */

class C_tipo_usuarioAPIController extends AppBaseController
{
    /** @var  C_tipo_usuarioRepository */
    private $cTipoUsuarioRepository;

    public function __construct(C_tipo_usuarioRepository $cTipoUsuarioRepo)
    {
        $this->cTipoUsuarioRepository = $cTipoUsuarioRepo;
    }

    /**
     * Display a listing of the C_tipo_usuario.
     * GET|HEAD /cTipoUsuarios
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $cTipoUsuarios = $this->cTipoUsuarioRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($cTipoUsuarios->toArray(), 'C Tipo Usuarios retrieved successfully');
    }

    /**
     * Store a newly created C_tipo_usuario in storage.
     * POST /cTipoUsuarios
     *
     * @param CreateC_tipo_usuarioAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateC_tipo_usuarioAPIRequest $request)
    {
        $input = $request->all();

        $cTipoUsuario = $this->cTipoUsuarioRepository->create($input);

        return $this->sendResponse($cTipoUsuario->toArray(), 'C Tipo Usuario saved successfully');
    }

    /**
     * Display the specified C_tipo_usuario.
     * GET|HEAD /cTipoUsuarios/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var C_tipo_usuario $cTipoUsuario */
        $cTipoUsuario = $this->cTipoUsuarioRepository->find($id);

        if (empty($cTipoUsuario)) {
            return $this->sendError('C Tipo Usuario not found');
        }

        return $this->sendResponse($cTipoUsuario->toArray(), 'C Tipo Usuario retrieved successfully');
    }

    /**
     * Update the specified C_tipo_usuario in storage.
     * PUT/PATCH /cTipoUsuarios/{id}
     *
     * @param int $id
     * @param UpdateC_tipo_usuarioAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateC_tipo_usuarioAPIRequest $request)
    {
        $input = $request->all();

        /** @var C_tipo_usuario $cTipoUsuario */
        $cTipoUsuario = $this->cTipoUsuarioRepository->find($id);

        if (empty($cTipoUsuario)) {
            return $this->sendError('C Tipo Usuario not found');
        }

        $cTipoUsuario = $this->cTipoUsuarioRepository->update($input, $id);

        return $this->sendResponse($cTipoUsuario->toArray(), 'C_tipo_usuario updated successfully');
    }

    /**
     * Remove the specified C_tipo_usuario from storage.
     * DELETE /cTipoUsuarios/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var C_tipo_usuario $cTipoUsuario */
        $cTipoUsuario = $this->cTipoUsuarioRepository->find($id);

        if (empty($cTipoUsuario)) {
            return $this->sendError('C Tipo Usuario not found');
        }

        $cTipoUsuario->delete();

        return $this->sendSuccess('C Tipo Usuario deleted successfully');
    }
}
