<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateC_regionRequest;
use App\Http\Requests\UpdateC_regionRequest;
use App\Repositories\C_regionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class C_regionController extends AppBaseController
{
    /** @var  C_regionRepository */
    private $cRegionRepository;

    public function __construct(C_regionRepository $cRegionRepo)
    {
        $this->cRegionRepository = $cRegionRepo;
    }

    /**
     * Display a listing of the C_region.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cRegions = $this->cRegionRepository->all();

        return view('c_regions.index')
            ->with('cRegions', $cRegions);
    }

    /**
     * Show the form for creating a new C_region.
     *
     * @return Response
     */
    public function create()
    {
        return view('c_regions.create');
    }

    /**
     * Store a newly created C_region in storage.
     *
     * @param CreateC_regionRequest $request
     *
     * @return Response
     */
    public function store(CreateC_regionRequest $request)
    {
        $input = $request->all();

        $cRegion = $this->cRegionRepository->create($input);

        Flash::success('C Region saved successfully.');

        return redirect(route('cRegions.index'));
    }

    /**
     * Display the specified C_region.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cRegion = $this->cRegionRepository->find($id);

        if (empty($cRegion)) {
            Flash::error('C Region not found');

            return redirect(route('cRegions.index'));
        }

        return view('c_regions.show')->with('cRegion', $cRegion);
    }

    /**
     * Show the form for editing the specified C_region.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cRegion = $this->cRegionRepository->find($id);

        if (empty($cRegion)) {
            Flash::error('C Region not found');

            return redirect(route('cRegions.index'));
        }

        return view('c_regions.edit')->with('cRegion', $cRegion);
    }

    /**
     * Update the specified C_region in storage.
     *
     * @param int $id
     * @param UpdateC_regionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateC_regionRequest $request)
    {
        $cRegion = $this->cRegionRepository->find($id);

        if (empty($cRegion)) {
            Flash::error('C Region not found');

            return redirect(route('cRegions.index'));
        }

        $cRegion = $this->cRegionRepository->update($request->all(), $id);

        Flash::success('C Region updated successfully.');

        return redirect(route('cRegions.index'));
    }

    /**
     * Remove the specified C_region from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cRegion = $this->cRegionRepository->find($id);

        if (empty($cRegion)) {
            Flash::error('C Region not found');

            return redirect(route('cRegions.index'));
        }

        $this->cRegionRepository->delete($id);

        Flash::success('C Region deleted successfully.');

        return redirect(route('cRegions.index'));
    }
}
