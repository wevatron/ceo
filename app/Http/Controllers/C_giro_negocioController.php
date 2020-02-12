<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateC_giro_negocioRequest;
use App\Http\Requests\UpdateC_giro_negocioRequest;
use App\Repositories\C_giro_negocioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class C_giro_negocioController extends AppBaseController
{
    /** @var  C_giro_negocioRepository */
    private $cGiroNegocioRepository;

    public function __construct(C_giro_negocioRepository $cGiroNegocioRepo)
    {
        $this->cGiroNegocioRepository = $cGiroNegocioRepo;
    }

    /**
     * Display a listing of the C_giro_negocio.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cGiroNegocios = $this->cGiroNegocioRepository->all();

        return view('c_giro_negocios.index')
            ->with('cGiroNegocios', $cGiroNegocios);
    }

    /**
     * Show the form for creating a new C_giro_negocio.
     *
     * @return Response
     */
    public function create()
    {
        return view('c_giro_negocios.create');
    }

    /**
     * Store a newly created C_giro_negocio in storage.
     *
     * @param CreateC_giro_negocioRequest $request
     *
     * @return Response
     */
    public function store(CreateC_giro_negocioRequest $request)
    {
        $input = $request->all();

        $cGiroNegocio = $this->cGiroNegocioRepository->create($input);

        Flash::success('Guardado Correctamente.');

        return redirect(route('cGiroNegocios.index'));
    }

    /**
     * Display the specified C_giro_negocio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cGiroNegocio = $this->cGiroNegocioRepository->find($id);

        if (empty($cGiroNegocio)) {
            Flash::error('No Encontrado');

            return redirect(route('cGiroNegocios.index'));
        }

        return view('c_giro_negocios.show')->with('cGiroNegocio', $cGiroNegocio);
    }

    /**
     * Show the form for editing the specified C_giro_negocio.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cGiroNegocio = $this->cGiroNegocioRepository->find($id);

        if (empty($cGiroNegocio)) {
            Flash::error('No Encontrado');

            return redirect(route('cGiroNegocios.index'));
        }

        return view('c_giro_negocios.edit')->with('cGiroNegocio', $cGiroNegocio);
    }

    /**
     * Update the specified C_giro_negocio in storage.
     *
     * @param int $id
     * @param UpdateC_giro_negocioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateC_giro_negocioRequest $request)
    {
        $cGiroNegocio = $this->cGiroNegocioRepository->find($id);

        if (empty($cGiroNegocio)) {
            Flash::error('No Encontrado');

            return redirect(route('cGiroNegocios.index'));
        }

        $cGiroNegocio = $this->cGiroNegocioRepository->update($request->all(), $id);

        Flash::success('Actualizado Correctamente');

        return redirect(route('cGiroNegocios.index'));
    }

    /**
     * Remove the specified C_giro_negocio from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cGiroNegocio = $this->cGiroNegocioRepository->find($id);

        if (empty($cGiroNegocio)) {
            Flash::error('No Encontrado');

            return redirect(route('cGiroNegocios.index'));
        }

        $this->cGiroNegocioRepository->delete($id);

        Flash::success('Eliminado Correctamente');

        return redirect(route('cGiroNegocios.index'));
    }
}
