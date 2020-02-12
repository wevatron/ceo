<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateT_eventoRequest;
use App\Http\Requests\UpdateT_eventoRequest;
use App\Repositories\T_eventoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\C_tipo_evento;
use Illuminate\Support\Facades\Storage;

class T_eventoController extends AppBaseController
{
    /** @var  T_eventoRepository */
    private $tEventoRepository;

    public function __construct(T_eventoRepository $tEventoRepo)
    {
        $this->tEventoRepository = $tEventoRepo;
    }

    /**
     * Display a listing of the T_evento.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tEventos = $this->tEventoRepository->all();

        return view('t_eventos.index')
            ->with('tEventos', $tEventos);
    }

    /**
     * Show the form for creating a new T_evento.
     *
     * @return Response
     */
    public function create()
    {
        $tipo_eventos = C_tipo_evento::pluck('descripcion','id'); 

        return view('t_eventos.create',compact('tipo_eventos'));
    }

    /**
     * Store a newly created T_evento in storage.
     *
     * @param CreateT_eventoRequest $request
     *
     * @return Response
     */
    public function store(CreateT_eventoRequest $request)
    {
        $input = $request->all();

        $tEvento = $this->tEventoRepository->create($input);

        if($request->file('url_img')){
                // Metodo para guardar en el storage;
            $ruta = Storage::disk('Grakaja')->put('fotoEvento',$request->file('url_img'));

            $tEvento->fill([
                'url_img'=>$ruta
            ])->save();
            
        }

        Flash::success('T Evento saved successfully.');

        return redirect(route('tEventos.index'));
    }

    /**
     * Display the specified T_evento.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tEvento = $this->tEventoRepository->find($id);

        if (empty($tEvento)) {
            Flash::error('T Evento not found');

            return redirect(route('tEventos.index'));
        }

        return view('t_eventos.show')->with('tEvento', $tEvento);
    }

    /**
     * Show the form for editing the specified T_evento.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tEvento = $this->tEventoRepository->find($id);
        $tipo_eventos = C_tipo_evento::pluck('descripcion','id');
        if (empty($tEvento)) {
            Flash::error('No Encontrado');

            return redirect(route('tEventos.index'));
        }
        return view('t_eventos.edit',compact('tEvento','tipo_eventos'));
    }

    /**
     * Update the specified T_evento in storage.
     *
     * @param int $id
     * @param UpdateT_eventoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateT_eventoRequest $request)
    {
        $tEvento = $this->tEventoRepository->find($id);
        // Guardar la variable viaje
        $imagenVieja = $tEvento->url_img; 
        if (empty($tEvento)) {
            Flash::error('No Encontrado');

            return redirect(route('tEventos.index'));
        }
        // Guarda Todo Execepto url_img
        $tEvento = $this->tEventoRepository->update($request->except(['url_img']), $id);

        // Revisiar si estan mandando un archivo. 
        if($request->file('url_img')){
            //Borrar Img Anterior
            Storage::disk('Grakaja')->delete($imagenVieja);
            //Guardar Img Nuevo
            $ruta = Storage::disk('Grakaja')->put('fotoEvento',$request->file('url_img'));
            $tEvento->fill([
                'url_img'=>$ruta
            ])->save();
        }

        Flash::success('T Evento updated successfully.');

        return redirect(route('tEventos.index'));
    }

    /**
     * Remove the specified T_evento from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tEvento = $this->tEventoRepository->find($id);

        if (empty($tEvento)) {
            Flash::error('No Encontrado');

            return redirect(route('tEventos.index'));
        }

        $this->tEventoRepository->delete($id);

        Flash::success('Eliminado Correctamente');

        return redirect(route('tEventos.index'));
    }
}
