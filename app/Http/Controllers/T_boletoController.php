<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateT_boletoRequest;
use App\Http\Requests\UpdateT_boletoRequest;
use App\Repositories\T_boletoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class T_boletoController extends AppBaseController
{
    /** @var  T_boletoRepository */
    private $tBoletoRepository;

    public function __construct(T_boletoRepository $tBoletoRepo)
    {
        $this->tBoletoRepository = $tBoletoRepo;
    }

    /**
     * Display a listing of the T_boleto.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tBoletos = $this->tBoletoRepository->all();

        return view('t_boletos.index')
            ->with('tBoletos', $tBoletos);
    }

    /**
     * Show the form for creating a new T_boleto.
     *
     * @return Response
     */
    public function create()
    {
        return view('t_boletos.create');
    }

    /**
     * Store a newly created T_boleto in storage.
     *
     * @param CreateT_boletoRequest $request
     *
     * @return Response
     */
    public function store(CreateT_boletoRequest $request)
    {
        $input = $request->all();

        $tBoleto = $this->tBoletoRepository->create($input);

        Flash::success('T Boleto saved successfully.');

        return redirect(route('tBoletos.index'));
    }

    /**
     * Display the specified T_boleto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tBoleto = $this->tBoletoRepository->find($id);

        if (empty($tBoleto)) {
            Flash::error('T Boleto not found');

            return redirect(route('tBoletos.index'));
        }

        return view('t_boletos.show')->with('tBoleto', $tBoleto);
    }

    /**
     * Show the form for editing the specified T_boleto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tBoleto = $this->tBoletoRepository->find($id);

        if (empty($tBoleto)) {
            Flash::error('T Boleto not found');

            return redirect(route('tBoletos.index'));
        }

        return view('t_boletos.edit')->with('tBoleto', $tBoleto);
    }

    /**
     * Update the specified T_boleto in storage.
     *
     * @param int $id
     * @param UpdateT_boletoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateT_boletoRequest $request)
    {
        $tBoleto = $this->tBoletoRepository->find($id);

        if (empty($tBoleto)) {
            Flash::error('T Boleto not found');

            return redirect(route('tBoletos.index'));
        }

        $tBoleto = $this->tBoletoRepository->update($request->all(), $id);

        Flash::success('T Boleto updated successfully.');

        return redirect(route('tBoletos.index'));
    }

    /**
     * Remove the specified T_boleto from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tBoleto = $this->tBoletoRepository->find($id);

        if (empty($tBoleto)) {
            Flash::error('T Boleto not found');

            return redirect(route('tBoletos.index'));
        }

        $this->tBoletoRepository->delete($id);

        Flash::success('T Boleto deleted successfully.');

        return redirect(route('tBoletos.index'));
    }
}
