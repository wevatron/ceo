<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateT_bazarRequest;
use App\Http\Requests\UpdateT_bazarRequest;
use App\Repositories\T_bazarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\C_categoria;
use App\Models\T_bazar;
use App\Models\T_imagen_bazar;
use Flash;
use Response;

class T_bazarController extends AppBaseController
{
    /** @var  T_bazarRepository */
    private $tBazarRepository;

    public function __construct(T_bazarRepository $tBazarRepo)
    {
        $this->tBazarRepository = $tBazarRepo;
    }

    /**
     * Display a listing of the T_bazar.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tBazars = T_bazar::paginate(20);

        return view('t_bazars.index')
            ->with('tBazars', $tBazars);
    }

    /**
     * Show the form for creating a new T_bazar.
     *
     * @return Response
     */
    public function create()
    {
        $categorias = C_categoria::pluck('descripcion','id');
        return view('t_bazars.create',compact('categorias'));
    }

    /**
     * Store a newly created T_bazar in storage.
     *
     * @param CreateT_bazarRequest $request
     *
     * @return Response
     */
    public function store(CreateT_bazarRequest $request)
    {
        $input = $request->all();

        $tBazar = $this->tBazarRepository->create($input);

        Flash::success('T Bazar saved successfully.');

        return redirect(route('tBazars.index'));
    }

    /**
     * Display the specified T_bazar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tBazar = $this->tBazarRepository->find($id);
        $tImagenBazars = T_imagen_bazar::where('t_bazar_id','=',$id)->get();

        if (empty($tBazar)) {
            Flash::error('T Bazar not found');

            return redirect(route('tBazars.index'));
        }

        return view('t_bazars.show',compact('tBazar', 'tImagenBazars'));
    }

    /**
     * Show the form for editing the specified T_bazar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $categorias = C_categoria::pluck('descripcion','id');
        $tBazar = $this->tBazarRepository->find($id);

        if (empty($tBazar)) {
            Flash::error('T Bazar not found');

            return redirect(route('tBazars.index'));
        }

        return view('t_bazars.edit',compact('tBazar', 'categorias'));
    }

    /**
     * Update the specified T_bazar in storage.
     *
     * @param int $id
     * @param UpdateT_bazarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateT_bazarRequest $request)
    {
        $tBazar = $this->tBazarRepository->find($id);

        if (empty($tBazar)) {
            Flash::error('T Bazar not found');

            return redirect(route('tBazars.index'));
        }

        $tBazar = $this->tBazarRepository->update($request->all(), $id);

        Flash::success('T Bazar updated successfully.');

        return redirect(route('tBazars.index'));
    }

    /**
     * Remove the specified T_bazar from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tBazar = $this->tBazarRepository->find($id);

        if (empty($tBazar)) {
            Flash::error('T Bazar not found');

            return redirect(route('tBazars.index'));
        }

        $this->tBazarRepository->delete($id);

        Flash::success('T Bazar deleted successfully.');

        return redirect(route('tBazars.index'));
    }
}
