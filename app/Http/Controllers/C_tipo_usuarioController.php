<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateC_tipo_usuarioRequest;
use App\Http\Requests\UpdateC_tipo_usuarioRequest;
use App\Repositories\C_tipo_usuarioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class C_tipo_usuarioController extends AppBaseController
{
    /** @var  C_tipo_usuarioRepository */
    private $cTipoUsuarioRepository;

    public function __construct(C_tipo_usuarioRepository $cTipoUsuarioRepo)
    {
        $this->cTipoUsuarioRepository = $cTipoUsuarioRepo;
    }

    /**
     * Display a listing of the C_tipo_usuario.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cTipoUsuarios = $this->cTipoUsuarioRepository->all();

        return view('c_tipo_usuarios.index')
            ->with('cTipoUsuarios', $cTipoUsuarios);
    }

    /**
     * Show the form for creating a new C_tipo_usuario.
     *
     * @return Response
     */
    public function create()
    {
        return view('c_tipo_usuarios.create');
    }

    /**
     * Store a newly created C_tipo_usuario in storage.
     *
     * @param CreateC_tipo_usuarioRequest $request
     *
     * @return Response
     */
    public function store(CreateC_tipo_usuarioRequest $request)
    {
        $input = $request->all();

        $cTipoUsuario = $this->cTipoUsuarioRepository->create($input);

        Flash::success('Guardado Correctamente.');

        return redirect(route('cTipoUsuarios.index'));
    }

    /**
     * Display the specified C_tipo_usuario.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cTipoUsuario = $this->cTipoUsuarioRepository->find($id);

        if (empty($cTipoUsuario)) {
            Flash::error('No Encontrado');

            return redirect(route('cTipoUsuarios.index'));
        }

        return view('c_tipo_usuarios.show')->with('cTipoUsuario', $cTipoUsuario);
    }

    /**
     * Show the form for editing the specified C_tipo_usuario.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cTipoUsuario = $this->cTipoUsuarioRepository->find($id);

        if (empty($cTipoUsuario)) {
            Flash::error('No Encontrado');

            return redirect(route('cTipoUsuarios.index'));
        }

        return view('c_tipo_usuarios.edit')->with('cTipoUsuario', $cTipoUsuario);
    }

    /**
     * Update the specified C_tipo_usuario in storage.
     *
     * @param int $id
     * @param UpdateC_tipo_usuarioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateC_tipo_usuarioRequest $request)
    {
        $cTipoUsuario = $this->cTipoUsuarioRepository->find($id);

        if (empty($cTipoUsuario)) {
            Flash::error('No Encontrado');

            return redirect(route('cTipoUsuarios.index'));
        }

        $cTipoUsuario = $this->cTipoUsuarioRepository->update($request->all(), $id);

        Flash::success('Actualizado Correctamente');

        return redirect(route('cTipoUsuarios.index'));
    }

    /**
     * Remove the specified C_tipo_usuario from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cTipoUsuario = $this->cTipoUsuarioRepository->find($id);

        if (empty($cTipoUsuario)) {
            Flash::error('No Encontrado');

            return redirect(route('cTipoUsuarios.index'));
        }

        $this->cTipoUsuarioRepository->delete($id);

        Flash::success('Eliminado Correctamente');

        return redirect(route('cTipoUsuarios.index'));
    }
}
