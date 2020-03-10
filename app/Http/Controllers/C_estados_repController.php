<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateC_estados_repRequest;
use App\Http\Requests\UpdateC_estados_repRequest;
use App\Repositories\C_estados_repRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class C_estados_repController extends AppBaseController
{
    /** @var  C_estados_repRepository */
    private $cEstadosRepRepository;

    public function __construct(C_estados_repRepository $cEstadosRepRepo)
    {
        $this->cEstadosRepRepository = $cEstadosRepRepo;
    }

    /**
     * Display a listing of the C_estados_rep.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cEstadosReps = $this->cEstadosRepRepository->all();

        return view('c_estados_reps.index')
            ->with('cEstadosReps', $cEstadosReps);
    }

    /**
     * Show the form for creating a new C_estados_rep.
     *
     * @return Response
     */
    public function create()
    {
        return view('c_estados_reps.create');
    }

    /**
     * Store a newly created C_estados_rep in storage.
     *
     * @param CreateC_estados_repRequest $request
     *
     * @return Response
     */
    public function store(CreateC_estados_repRequest $request)
    {
        $input = $request->all();

        $cEstadosRep = $this->cEstadosRepRepository->create($input);

        Flash::success('C Estados Rep saved successfully.');

        return redirect(route('cEstadosReps.index'));
    }

    /**
     * Display the specified C_estados_rep.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cEstadosRep = $this->cEstadosRepRepository->find($id);

        if (empty($cEstadosRep)) {
            Flash::error('C Estados Rep not found');

            return redirect(route('cEstadosReps.index'));
        }

        return view('c_estados_reps.show')->with('cEstadosRep', $cEstadosRep);
    }

    /**
     * Show the form for editing the specified C_estados_rep.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cEstadosRep = $this->cEstadosRepRepository->find($id);

        if (empty($cEstadosRep)) {
            Flash::error('C Estados Rep not found');

            return redirect(route('cEstadosReps.index'));
        }

        return view('c_estados_reps.edit')->with('cEstadosRep', $cEstadosRep);
    }

    /**
     * Update the specified C_estados_rep in storage.
     *
     * @param int $id
     * @param UpdateC_estados_repRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateC_estados_repRequest $request)
    {
        $cEstadosRep = $this->cEstadosRepRepository->find($id);

        if (empty($cEstadosRep)) {
            Flash::error('C Estados Rep not found');

            return redirect(route('cEstadosReps.index'));
        }

        $cEstadosRep = $this->cEstadosRepRepository->update($request->all(), $id);

        Flash::success('C Estados Rep updated successfully.');

        return redirect(route('cEstadosReps.index'));
    }

    /**
     * Remove the specified C_estados_rep from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cEstadosRep = $this->cEstadosRepRepository->find($id);

        if (empty($cEstadosRep)) {
            Flash::error('C Estados Rep not found');

            return redirect(route('cEstadosReps.index'));
        }

        $this->cEstadosRepRepository->delete($id);

        Flash::success('C Estados Rep deleted successfully.');

        return redirect(route('cEstadosReps.index'));
    }
}
