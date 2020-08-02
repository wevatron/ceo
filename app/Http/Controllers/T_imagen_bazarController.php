<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateT_imagen_bazarRequest;
use App\Http\Requests\UpdateT_imagen_bazarRequest;
use App\Repositories\T_imagen_bazarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\T_bazar;
use Illuminate\Support\Facades\Storage;
use App\ImageModel;
use Image;

class T_imagen_bazarController extends AppBaseController
{
    /** @var  T_imagen_bazarRepository */
    private $tImagenBazarRepository;

    public function __construct(T_imagen_bazarRepository $tImagenBazarRepo)
    {
        $this->tImagenBazarRepository = $tImagenBazarRepo;
    }

    /**
     * Display a listing of the T_imagen_bazar.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tImagenBazars = $this->tImagenBazarRepository->all();

        return view('t_imagen_bazars.index')
            ->with('tImagenBazars', $tImagenBazars);
    }

    /**
     * Show the form for creating a new T_imagen_bazar.
     *
     * @return Response
     */
    public function create(Request $r)
    {
        $bazar = T_bazar::where('id','=',$r->id)->pluck('nombre','id');
        
        if (count($bazar)<1) {
            return redirect('/tBazars');
        }
        $id=$r->id;
        return view('t_imagen_bazars.create',compact('bazar','id'));
    }

    /**
     * Store a newly created T_imagen_bazar in storage.
     *
     * @param CreateT_imagen_bazarRequest $request
     *
     * @return Response
     */
    public function store(CreateT_imagen_bazarRequest $request)
    {
        $input = $request->all();
        $tImagenBazar = $this->tImagenBazarRepository->create($input);
        $x=1920;
        $y=1080;

        if ($request->relacion == 1) {
            $x=1920;
            $y=1080;
        }else if($request->relacion == 3){
            $x=1000;
            $y=1000;
        }
        else {
            $x=1100;
            $y=1600;
        }

        if($request->file('imagen')){
            // $this.validate($request,[
            //     'imagen'=>'required|image'
            // ]);
            $fieldFile = $request->file('imagen');

            $mime= $fieldFile->getClientOriginalExtension();
            $imageName = time().".".$mime;

            $image = Image::make($fieldFile)->resize($x, $y);
                // Metodo para guardar en el storage;
             
                $ruta =   Storage::disk('Grakaja')->put("fotoEvento/".$imageName, (string) $image->encode());
            //$ruta = Storage::disk('Grakaja')->put('fotoEvento',$image);
           

            $tImagenBazar->fill([
                'imagen'=>'http://somosrino.org/storageCeo/fotoEvento/'.$imageName
            ])->save();
            
        }


       

        Flash::success('T Imagen Bazar saved successfully.');

        return redirect(url('tBazars/'.$tImagenBazar->t_bazar_id));
    }

    /**
     * Display the specified T_imagen_bazar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tImagenBazar = $this->tImagenBazarRepository->find($id);

        if (empty($tImagenBazar)) {
            Flash::error('T Imagen Bazar not found');

            return redirect(route('tImagenBazars.index'));
        }

        return view('t_imagen_bazars.show')->with('tImagenBazar', $tImagenBazar);
    }

    /**
     * Show the form for editing the specified T_imagen_bazar.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tImagenBazar = $this->tImagenBazarRepository->find($id);

        if (empty($tImagenBazar)) {
            Flash::error('T Imagen Bazar not found');

            return redirect(route('tImagenBazars.index'));
        }

        return view('t_imagen_bazars.edit')->with('tImagenBazar', $tImagenBazar);
    }

    /**
     * Update the specified T_imagen_bazar in storage.
     *
     * @param int $id
     * @param UpdateT_imagen_bazarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateT_imagen_bazarRequest $request)
    {
        $tImagenBazar = $this->tImagenBazarRepository->find($id);

        if (empty($tImagenBazar)) {
            Flash::error('T Imagen Bazar not found');

            return redirect(route('tImagenBazars.index'));
        }

        $tImagenBazar = $this->tImagenBazarRepository->update($request->all(), $id);

        Flash::success('T Imagen Bazar updated successfully.');

        return redirect(route('tImagenBazars.index'));
    }

    /**
     * Remove the specified T_imagen_bazar from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tImagenBazar = $this->tImagenBazarRepository->find($id);
        $retorno = $tImagenBazar->t_bazar_id;
        if (empty($tImagenBazar)) {
            Flash::error('T Imagen Bazar not found');

            return redirect(route('tImagenBazars.index'));
        }

        $this->tImagenBazarRepository->delete($id);

        Flash::success('T Imagen Bazar deleted successfully.');

        return redirect(url('tBazars/'.$retorno));
    }
}
