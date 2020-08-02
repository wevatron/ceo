<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateT_aprendeRequest;
use App\Http\Requests\UpdateT_aprendeRequest;
use App\Repositories\T_aprendeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use App\Models\C_categoria_aprende;
use Response;

class T_aprendeController extends AppBaseController
{
    /** @var  T_aprendeRepository */
    private $tAprendeRepository;

    public function __construct(T_aprendeRepository $tAprendeRepo)
    {
        $this->tAprendeRepository = $tAprendeRepo;
    }

    /**
     * Display a listing of the T_aprende.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tAprendes = $this->tAprendeRepository->all();

        return view('t_aprendes.index')
            ->with('tAprendes', $tAprendes);
    }

    /**
     * Show the form for creating a new T_aprende.
     *
     * @return Response
     */
    public function create()
    {
        $categorias = C_categoria_aprende::pluck('descripcion','id');
        return view('t_aprendes.create',compact('categorias'));
    }

    /**
     * Store a newly created T_aprende in storage.
     *
     * @param CreateT_aprendeRequest $request
     *
     * @return Response
     */
    public function store(CreateT_aprendeRequest $request)
    {
        $input = $request->all();

        $tAprende = $this->tAprendeRepository->create($input);

        Flash::success('T Aprende saved successfully.');

        return redirect(route('tAprendes.index'));
    }

    /**
     * Display the specified T_aprende.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tAprende = $this->tAprendeRepository->find($id);

        if (empty($tAprende)) {
            Flash::error('T Aprende not found');

            return redirect(route('tAprendes.index'));
        }

        return view('t_aprendes.show')->with('tAprende', $tAprende);
    }

    /**
     * Show the form for editing the specified T_aprende.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tAprende = $this->tAprendeRepository->find($id);
        $categorias = C_categoria_aprende::pluck('descripcion','id');
        if (empty($tAprende)) {
            Flash::error('T Aprende not found');

            return redirect(route('tAprendes.index'));
        }

        return view('t_aprendes.edit',compact('tAprende', 'categorias'));
    }

    /**
     * Update the specified T_aprende in storage.
     *
     * @param int $id
     * @param UpdateT_aprendeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateT_aprendeRequest $request)
    {
        $tAprende = $this->tAprendeRepository->find($id);

        if (empty($tAprende)) {
            Flash::error('T Aprende not found');

            return redirect(route('tAprendes.index'));
        }

        $tAprende = $this->tAprendeRepository->update($request->all(), $id);

        Flash::success('T Aprende updated successfully.');

        return redirect(route('tAprendes.index'));
    }

    /**
     * Remove the specified T_aprende from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tAprende = $this->tAprendeRepository->find($id);

        if (empty($tAprende)) {
            Flash::error('T Aprende not found');

            return redirect(route('tAprendes.index'));
        }

        $this->tAprendeRepository->delete($id);

        Flash::success('T Aprende deleted successfully.');

        return redirect(route('tAprendes.index'));
    }
}
