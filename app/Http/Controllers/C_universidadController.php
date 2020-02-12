<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateC_universidadRequest;
use App\Http\Requests\UpdateC_universidadRequest;
use App\Repositories\C_universidadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class C_universidadController extends AppBaseController
{
    /** @var  C_universidadRepository */
    private $cUniversidadRepository;

    public function __construct(C_universidadRepository $cUniversidadRepo)
    {
        $this->cUniversidadRepository = $cUniversidadRepo;
    }

    /**
     * Display a listing of the C_universidad.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cUniversidads = $this->cUniversidadRepository->all();

        return view('c_universidads.index')
            ->with('cUniversidads', $cUniversidads);
    }

    /**
     * Show the form for creating a new C_universidad.
     *
     * @return Response
     */
    public function create()
    {
        return view('c_universidads.create');
    }

    /**
     * Store a newly created C_universidad in storage.
     *
     * @param CreateC_universidadRequest $request
     *
     * @return Response
     */
    public function store(CreateC_universidadRequest $request)
    {
        $input = $request->all();

        $cUniversidad = $this->cUniversidadRepository->create($input);

        Flash::success('Guardado Correctamente.');

        return redirect(route('cUniversidads.index'));
    }

    /**
     * Display the specified C_universidad.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cUniversidad = $this->cUniversidadRepository->find($id);

        if (empty($cUniversidad)) {
            Flash::error('No Encontrado');

            return redirect(route('cUniversidads.index'));
        }

        return view('c_universidads.show')->with('cUniversidad', $cUniversidad);
    }

    /**
     * Show the form for editing the specified C_universidad.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cUniversidad = $this->cUniversidadRepository->find($id);

        if (empty($cUniversidad)) {
            Flash::error('No Encontrado');

            return redirect(route('cUniversidads.index'));
        }

        return view('c_universidads.edit')->with('cUniversidad', $cUniversidad);
    }

    /**
     * Update the specified C_universidad in storage.
     *
     * @param int $id
     * @param UpdateC_universidadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateC_universidadRequest $request)
    {
        $cUniversidad = $this->cUniversidadRepository->find($id);

        if (empty($cUniversidad)) {
            Flash::error('No Encontrado');

            return redirect(route('cUniversidads.index'));
        }

        $cUniversidad = $this->cUniversidadRepository->update($request->all(), $id);

        Flash::success('Actualizado Correctamente');

        return redirect(route('cUniversidads.index'));
    }

    /**
     * Remove the specified C_universidad from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cUniversidad = $this->cUniversidadRepository->find($id);

        if (empty($cUniversidad)) {
            Flash::error('No Encontrado');

            return redirect(route('cUniversidads.index'));
        }

        $this->cUniversidadRepository->delete($id);

        Flash::success('C Universidad deleted successfully.');

        return redirect(route('cUniversidads.index'));
    }
}
