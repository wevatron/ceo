<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateT_personaRequest;
use App\Http\Requests\UpdateT_personaRequest;
use App\Repositories\T_personaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\C_ocupacion;
use App\Models\C_region;
use App\Models\C_municipio;
use App\Models\C_estados_rep;
use App\Models\C_tipo_usuario;
use App\Models\T_persona;

class T_personaController extends AppBaseController
{
    /** @var  T_personaRepository */
    private $tPersonaRepository;

    public function __construct(T_personaRepository $tPersonaRepo)
    {
        $this->tPersonaRepository = $tPersonaRepo;
    }

    /**
     * Display a listing of the T_persona.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $tPersonas = $this->tPersonaRepository->all();
        $tPersonas = T_persona::paginate(15);

        return view('t_personas.index')
            ->with('tPersonas', $tPersonas);
    }

    /**
     * Show the form for creating a new T_persona.
     *
     * @return Response
     */
    public function create()
    {
        return view('t_personas.create');
    }

    /**
     * Store a newly created T_persona in storage.
     *
     * @param CreateT_personaRequest $request
     *
     * @return Response
     */
    public function store(CreateT_personaRequest $request)
    {
        $input = $request->all();
        $tPersona = $this->tPersonaRepository->create($input);
      

        Flash::success('T Persona saved successfully.');

        return redirect(route('tPersonas.index'));
    }

    /**
     * Display the specified T_persona.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tPersona = $this->tPersonaRepository->find($id);
        
        $tEventos = T_boleto::where('usuario_id','=',$tPersona->id)
        ->with('Eventos')->paginate(10);
        $numBoletos = count($tEventos);
        $likes =T_like::where('usuario_id','=',$tPersona->id)->count();

     //   dd(count($tEventos));
       
        if (empty($tPersona)) {
            Flash::error('No Encontrado');

            return redirect(route('tPersonas.index'));
        }

        return view('t_personas.show',compact('tPersona','tEventos','numBoletos','likes'));
    }

    /**
     * Show the form for editing the specified T_persona.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tPersona = $this->tPersonaRepository->find($id);
        $ocupacion = C_ocupacion::pluck('descripcion','id');
        $region = C_region::pluck('descripcion','id');
        $municipios = C_municipio::pluck('nombre','id');
        $estados = C_estados_rep::pluck('nombre','id');
        $tipos = C_tipo_usuario::pluck('descripcion','id');

        if (empty($tPersona)) {
            Flash::error('No Encontrado');

            return redirect(route('tPersonas.index'));
        }

        return view('t_personas.edit',compact('tPersona','ocupacion','region','municipios','estados','tipos'));
    }

    /**
     * Update the specified T_persona in storage.
     *
     * @param int $id
     * @param UpdateT_personaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateT_personaRequest $request)
    {
        $tPersona = $this->tPersonaRepository->find($id);

        if (empty($tPersona)) {
            Flash::error('T Persona not found');

            return redirect(route('tPersonas.index'));
        }

        $tPersona = $this->tPersonaRepository->update($request->all(), $id);

        Flash::success('T Persona updated successfully.');

        return redirect(route('tPersonas.index'));
    }

    /**
     * Remove the specified T_persona from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tPersona = $this->tPersonaRepository->find($id);

        if (empty($tPersona)) {
            Flash::error('No Encontrado');

            return redirect(route('tPersonas.index'));
        }

        $this->tPersonaRepository->delete($id);

        Flash::success('Eliminado Correctamente');

        return redirect(route('tPersonas.index'));
    }
}
