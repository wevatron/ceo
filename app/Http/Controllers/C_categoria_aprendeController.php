<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateC_categoria_aprendeRequest;
use App\Http\Requests\UpdateC_categoria_aprendeRequest;
use App\Repositories\C_categoria_aprendeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class C_categoria_aprendeController extends AppBaseController
{
    /** @var  C_categoria_aprendeRepository */
    private $cCategoriaAprendeRepository;

    public function __construct(C_categoria_aprendeRepository $cCategoriaAprendeRepo)
    {
        $this->cCategoriaAprendeRepository = $cCategoriaAprendeRepo;
    }

    /**
     * Display a listing of the C_categoria_aprende.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cCategoriaAprendes = $this->cCategoriaAprendeRepository->all();

        return view('c_categoria_aprendes.index')
            ->with('cCategoriaAprendes', $cCategoriaAprendes);
    }

    /**
     * Show the form for creating a new C_categoria_aprende.
     *
     * @return Response
     */
    public function create()
    {
        return view('c_categoria_aprendes.create');
    }

    /**
     * Store a newly created C_categoria_aprende in storage.
     *
     * @param CreateC_categoria_aprendeRequest $request
     *
     * @return Response
     */
    public function store(CreateC_categoria_aprendeRequest $request)
    {
        $input = $request->all();

        $cCategoriaAprende = $this->cCategoriaAprendeRepository->create($input);

        Flash::success('C Categoria Aprende saved successfully.');

        return redirect(route('cCategoriaAprendes.index'));
    }

    /**
     * Display the specified C_categoria_aprende.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cCategoriaAprende = $this->cCategoriaAprendeRepository->find($id);

        if (empty($cCategoriaAprende)) {
            Flash::error('C Categoria Aprende not found');

            return redirect(route('cCategoriaAprendes.index'));
        }

        return view('c_categoria_aprendes.show')->with('cCategoriaAprende', $cCategoriaAprende);
    }

    /**
     * Show the form for editing the specified C_categoria_aprende.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cCategoriaAprende = $this->cCategoriaAprendeRepository->find($id);

        if (empty($cCategoriaAprende)) {
            Flash::error('C Categoria Aprende not found');

            return redirect(route('cCategoriaAprendes.index'));
        }

        return view('c_categoria_aprendes.edit')->with('cCategoriaAprende', $cCategoriaAprende);
    }

    /**
     * Update the specified C_categoria_aprende in storage.
     *
     * @param int $id
     * @param UpdateC_categoria_aprendeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateC_categoria_aprendeRequest $request)
    {
        $cCategoriaAprende = $this->cCategoriaAprendeRepository->find($id);

        if (empty($cCategoriaAprende)) {
            Flash::error('C Categoria Aprende not found');

            return redirect(route('cCategoriaAprendes.index'));
        }

        $cCategoriaAprende = $this->cCategoriaAprendeRepository->update($request->all(), $id);

        Flash::success('C Categoria Aprende updated successfully.');

        return redirect(route('cCategoriaAprendes.index'));
    }

    /**
     * Remove the specified C_categoria_aprende from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cCategoriaAprende = $this->cCategoriaAprendeRepository->find($id);

        if (empty($cCategoriaAprende)) {
            Flash::error('C Categoria Aprende not found');

            return redirect(route('cCategoriaAprendes.index'));
        }

        $this->cCategoriaAprendeRepository->delete($id);

        Flash::success('C Categoria Aprende deleted successfully.');

        return redirect(route('cCategoriaAprendes.index'));
    }
}
