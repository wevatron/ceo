<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateC_categoriaRequest;
use App\Http\Requests\UpdateC_categoriaRequest;
use App\Repositories\C_categoriaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class C_categoriaController extends AppBaseController
{
    /** @var  C_categoriaRepository */
    private $cCategoriaRepository;

    public function __construct(C_categoriaRepository $cCategoriaRepo)
    {
        $this->cCategoriaRepository = $cCategoriaRepo;
    }

    /**
     * Display a listing of the C_categoria.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cCategorias = $this->cCategoriaRepository->all();

        return view('c_categorias.index')
            ->with('cCategorias', $cCategorias);
    }

    /**
     * Show the form for creating a new C_categoria.
     *
     * @return Response
     */
    public function create()
    {
        return view('c_categorias.create');
    }

    /**
     * Store a newly created C_categoria in storage.
     *
     * @param CreateC_categoriaRequest $request
     *
     * @return Response
     */
    public function store(CreateC_categoriaRequest $request)
    {
        $input = $request->all();

        $cCategoria = $this->cCategoriaRepository->create($input);

        Flash::success('C Categoria saved successfully.');

        return redirect(route('cCategorias.index'));
    }

    /**
     * Display the specified C_categoria.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cCategoria = $this->cCategoriaRepository->find($id);

        if (empty($cCategoria)) {
            Flash::error('C Categoria not found');

            return redirect(route('cCategorias.index'));
        }

        return view('c_categorias.show')->with('cCategoria', $cCategoria);
    }

    /**
     * Show the form for editing the specified C_categoria.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cCategoria = $this->cCategoriaRepository->find($id);

        if (empty($cCategoria)) {
            Flash::error('C Categoria not found');

            return redirect(route('cCategorias.index'));
        }

        return view('c_categorias.edit')->with('cCategoria', $cCategoria);
    }

    /**
     * Update the specified C_categoria in storage.
     *
     * @param int $id
     * @param UpdateC_categoriaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateC_categoriaRequest $request)
    {
        $cCategoria = $this->cCategoriaRepository->find($id);

        if (empty($cCategoria)) {
            Flash::error('C Categoria not found');

            return redirect(route('cCategorias.index'));
        }

        $cCategoria = $this->cCategoriaRepository->update($request->all(), $id);

        Flash::success('C Categoria updated successfully.');

        return redirect(route('cCategorias.index'));
    }

    /**
     * Remove the specified C_categoria from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cCategoria = $this->cCategoriaRepository->find($id);

        if (empty($cCategoria)) {
            Flash::error('C Categoria not found');

            return redirect(route('cCategorias.index'));
        }

        $this->cCategoriaRepository->delete($id);

        Flash::success('C Categoria deleted successfully.');

        return redirect(route('cCategorias.index'));
    }
}
