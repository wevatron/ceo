<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateC_horarioRequest;
use App\Http\Requests\UpdateC_horarioRequest;
use App\Repositories\C_horarioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class C_horarioController extends AppBaseController
{
    /** @var  C_horarioRepository */
    private $cHorarioRepository;

    public function __construct(C_horarioRepository $cHorarioRepo)
    {
        $this->cHorarioRepository = $cHorarioRepo;
    }

    /**
     * Display a listing of the C_horario.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cHorarios = $this->cHorarioRepository->all();

        return view('c_horarios.index')
            ->with('cHorarios', $cHorarios);
    }

    /**
     * Show the form for creating a new C_horario.
     *
     * @return Response
     */
    public function create()
    {
        return view('c_horarios.create');
    }

    /**
     * Store a newly created C_horario in storage.
     *
     * @param CreateC_horarioRequest $request
     *
     * @return Response
     */
    public function store(CreateC_horarioRequest $request)
    {
        $input = $request->all();

        $cHorario = $this->cHorarioRepository->create($input);

        Flash::success('Horario Guardado Correctamente..');

        return redirect(route('cHorarios.index'));
    }

    /**
     * Display the specified C_horario.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cHorario = $this->cHorarioRepository->find($id);

        if (empty($cHorario)) {
            Flash::error('Horario no Encontrado');

            return redirect(route('cHorarios.index'));
        }

        return view('c_horarios.show')->with('cHorario', $cHorario);
    }

    /**
     * Show the form for editing the specified C_horario.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cHorario = $this->cHorarioRepository->find($id);

        if (empty($cHorario)) {
            Flash::error('Horario no Encontrado');

            return redirect(route('cHorarios.index'));
        }

        return view('c_horarios.edit')->with('cHorario', $cHorario);
    }

    /**
     * Update the specified C_horario in storage.
     *
     * @param int $id
     * @param UpdateC_horarioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateC_horarioRequest $request)
    {
        $cHorario = $this->cHorarioRepository->find($id);

        if (empty($cHorario)) {
            Flash::error('Horario no Encontrado');

            return redirect(route('cHorarios.index'));
        }

        $cHorario = $this->cHorarioRepository->update($request->all(), $id);

        Flash::success('Horario se ha Actualizado Correctamente.');

        return redirect(route('cHorarios.index'));
    }

    /**
     * Remove the specified C_horario from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cHorario = $this->cHorarioRepository->find($id);

        if (empty($cHorario)) {
            Flash::error('Horario no Encontrado');

            return redirect(route('cHorarios.index'));
        }

        $this->cHorarioRepository->delete($id);

        Flash::success('Horario Eliminado Correctamente');

        return redirect(route('cHorarios.index'));
    }
}
