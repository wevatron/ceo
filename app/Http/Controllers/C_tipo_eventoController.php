<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateC_tipo_eventoRequest;
use App\Http\Requests\UpdateC_tipo_eventoRequest;
use App\Repositories\C_tipo_eventoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class C_tipo_eventoController extends AppBaseController
{
    /** @var  C_tipo_eventoRepository */
    private $cTipoEventoRepository;

    public function __construct(C_tipo_eventoRepository $cTipoEventoRepo)
    {
        $this->cTipoEventoRepository = $cTipoEventoRepo;
    }

    /**
     * Display a listing of the C_tipo_evento.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cTipoEventos = $this->cTipoEventoRepository->all();

        return view('c_tipo_eventos.index')
            ->with('cTipoEventos', $cTipoEventos);
    }

    /**
     * Show the form for creating a new C_tipo_evento.
     *
     * @return Response
     */
    public function create()
    {
        return view('c_tipo_eventos.create');
    }

    /**
     * Store a newly created C_tipo_evento in storage.
     *
     * @param CreateC_tipo_eventoRequest $request
     *
     * @return Response
     */
    public function store(CreateC_tipo_eventoRequest $request)
    {
        $input = $request->all();

        $cTipoEvento = $this->cTipoEventoRepository->create($input);

        Flash::success('Guardado Correctamente.');

        return redirect(route('cTipoEventos.index'));
    }

    /**
     * Display the specified C_tipo_evento.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cTipoEvento = $this->cTipoEventoRepository->find($id);

        if (empty($cTipoEvento)) {
            Flash::error('No Encontrado');

            return redirect(route('cTipoEventos.index'));
        }

        return view('c_tipo_eventos.show')->with('cTipoEvento', $cTipoEvento);
    }

    /**
     * Show the form for editing the specified C_tipo_evento.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cTipoEvento = $this->cTipoEventoRepository->find($id);

        if (empty($cTipoEvento)) {
            Flash::error('No Encontrado');

            return redirect(route('cTipoEventos.index'));
        }

        return view('c_tipo_eventos.edit')->with('cTipoEvento', $cTipoEvento);
    }

    /**
     * Update the specified C_tipo_evento in storage.
     *
     * @param int $id
     * @param UpdateC_tipo_eventoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateC_tipo_eventoRequest $request)
    {
        $cTipoEvento = $this->cTipoEventoRepository->find($id);

        if (empty($cTipoEvento)) {
            Flash::error('No Encontrado');

            return redirect(route('cTipoEventos.index'));
        }

        $cTipoEvento = $this->cTipoEventoRepository->update($request->all(), $id);

        Flash::success('Actualizado Correctamente');

        return redirect(route('cTipoEventos.index'));
    }

    /**
     * Remove the specified C_tipo_evento from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cTipoEvento = $this->cTipoEventoRepository->find($id);

        if (empty($cTipoEvento)) {
            Flash::error('No Encontrado');

            return redirect(route('cTipoEventos.index'));
        }

        $this->cTipoEventoRepository->delete($id);

        Flash::success('Eliminado Correctamente');

        return redirect(route('cTipoEventos.index'));
    }
}
