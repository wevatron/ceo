<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateC_municipioRequest;
use App\Http\Requests\UpdateC_municipioRequest;
use App\Repositories\C_municipioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class C_municipioController extends AppBaseController
{
    /** @var  C_municipioRepository */
    private $cMunicipioRepository;

    public function __construct(C_municipioRepository $cMunicipioRepo)
    {
        $this->cMunicipioRepository = $cMunicipioRepo;
    }

    /**
     * Display a listing of the C_municipio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cMunicipios = $this->cMunicipioRepository->all();

        return view('c_municipios.index')
            ->with('cMunicipios', $cMunicipios);
    }

    /**
     * Show the form for creating a new C_municipio.
     *
     * @return Response
     */
    public function create()
    {
        return view('c_municipios.create');
    }

    /**
     * Store a newly created C_municipio in storage.
     *
     * @param CreateC_municipioRequest $request
     *
     * @return Response
     */
    public function store(CreateC_municipioRequest $request)
    {
        $input = $request->all();

        $cMunicipio = $this->cMunicipioRepository->create($input);

        Flash::success('Guardado Correctamente.');

        return redirect(route('cMunicipios.index'));
    }

    /**
     * Display the specified C_municipio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cMunicipio = $this->cMunicipioRepository->find($id);

        if (empty($cMunicipio)) {
            Flash::error('No Encontrado');

            return redirect(route('cMunicipios.index'));
        }

        return view('c_municipios.show')->with('cMunicipio', $cMunicipio);
    }

    /**
     * Show the form for editing the specified C_municipio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cMunicipio = $this->cMunicipioRepository->find($id);

        if (empty($cMunicipio)) {
            Flash::error('No Encontrado');

            return redirect(route('cMunicipios.index'));
        }

        return view('c_municipios.edit')->with('cMunicipio', $cMunicipio);
    }

    /**
     * Update the specified C_municipio in storage.
     *
     * @param int $id
     * @param UpdateC_municipioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateC_municipioRequest $request)
    {
        $cMunicipio = $this->cMunicipioRepository->find($id);

        if (empty($cMunicipio)) {
            Flash::error('No Encontrado');

            return redirect(route('cMunicipios.index'));
        }

        $cMunicipio = $this->cMunicipioRepository->update($request->all(), $id);

        Flash::success('Actualizado Correctamente');

        return redirect(route('cMunicipios.index'));
    }

    /**
     * Remove the specified C_municipio from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cMunicipio = $this->cMunicipioRepository->find($id);

        if (empty($cMunicipio)) {
            Flash::error('No Encontrado');

            return redirect(route('cMunicipios.index'));
        }

        $this->cMunicipioRepository->delete($id);

        Flash::success('Eliminado Correctamente');

        return redirect(route('cMunicipios.index'));
    }
}
