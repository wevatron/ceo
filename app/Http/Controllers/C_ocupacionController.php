<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateC_ocupacionRequest;
use App\Http\Requests\UpdateC_ocupacionRequest;
use App\Repositories\C_ocupacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class C_ocupacionController extends AppBaseController
{
    /** @var  C_ocupacionRepository */
    private $cOcupacionRepository;

    public function __construct(C_ocupacionRepository $cOcupacionRepo)
    {
        $this->cOcupacionRepository = $cOcupacionRepo;
    }

    /**
     * Display a listing of the C_ocupacion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cOcupacions = $this->cOcupacionRepository->all();

        return view('c_ocupacions.index')
            ->with('cOcupacions', $cOcupacions);
    }

    /**
     * Show the form for creating a new C_ocupacion.
     *
     * @return Response
     */
    public function create()
    {
        return view('c_ocupacions.create');
    }

    /**
     * Store a newly created C_ocupacion in storage.
     *
     * @param CreateC_ocupacionRequest $request
     *
     * @return Response
     */
    public function store(CreateC_ocupacionRequest $request)
    {
        $input = $request->all();

        $cOcupacion = $this->cOcupacionRepository->create($input);

        Flash::success('C Ocupacion saved successfully.');

        return redirect(route('cOcupacions.index'));
    }

    /**
     * Display the specified C_ocupacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cOcupacion = $this->cOcupacionRepository->find($id);

        if (empty($cOcupacion)) {
            Flash::error('C Ocupacion not found');

            return redirect(route('cOcupacions.index'));
        }

        return view('c_ocupacions.show')->with('cOcupacion', $cOcupacion);
    }

    /**
     * Show the form for editing the specified C_ocupacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cOcupacion = $this->cOcupacionRepository->find($id);

        if (empty($cOcupacion)) {
            Flash::error('C Ocupacion not found');

            return redirect(route('cOcupacions.index'));
        }

        return view('c_ocupacions.edit')->with('cOcupacion', $cOcupacion);
    }

    /**
     * Update the specified C_ocupacion in storage.
     *
     * @param int $id
     * @param UpdateC_ocupacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateC_ocupacionRequest $request)
    {
        $cOcupacion = $this->cOcupacionRepository->find($id);

        if (empty($cOcupacion)) {
            Flash::error('C Ocupacion not found');

            return redirect(route('cOcupacions.index'));
        }

        $cOcupacion = $this->cOcupacionRepository->update($request->all(), $id);

        Flash::success('C Ocupacion updated successfully.');

        return redirect(route('cOcupacions.index'));
    }

    /**
     * Remove the specified C_ocupacion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cOcupacion = $this->cOcupacionRepository->find($id);

        if (empty($cOcupacion)) {
            Flash::error('C Ocupacion not found');

            return redirect(route('cOcupacions.index'));
        }

        $this->cOcupacionRepository->delete($id);

        Flash::success('C Ocupacion deleted successfully.');

        return redirect(route('cOcupacions.index'));
    }
}
