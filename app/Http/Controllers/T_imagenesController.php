<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateT_imagenesRequest;
use App\Http\Requests\UpdateT_imagenesRequest;
use App\Repositories\T_imagenesRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\T_evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\ImageModel;
use Image;

use Flash;
use Response;

class T_imagenesController extends AppBaseController
{
    /** @var  T_imagenesRepository */
    private $tImagenesRepository;

    public function __construct(T_imagenesRepository $tImagenesRepo)
    {
        $this->tImagenesRepository = $tImagenesRepo;
    }

    /**
     * Display a listing of the T_imagenes.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $tImagenes = $this->tImagenesRepository->all();

        // return view('t_imagenes.index')
        //     ->with('tImagenes', $tImagenes);
    }

    /**
     * Show the form for creating a new T_imagenes.
     *
     * @return Response
     */
    public function create(Request $r)
    {
        $eventos = T_evento::where('id','=',$r->id)->pluck('nombre_evento','id');
        
        if (count($eventos)<1) {
            return redirect('/tEventos');
        }
        return view('t_imagenes.create',compact('eventos'));
    }

    /**
     * Store a newly created T_imagenes in storage.
     *
     * @param CreateT_imagenesRequest $request
     *
     * @return Response
     */
    public function store(CreateT_imagenesRequest $request)
    {
        $input = $request->all();

        $tImagenes = $this->tImagenesRepository->create($input);
        $x=800;
        $y=450;

        Flash::success('T Imagenes saved successfully.');
        if ($request->relacion == 1) {
            $x=800;
            $y=450;
        }else if($request->relacion == 3){
            $x=512;
            $y=512;
        }
        else {
            $x=1100;
            $y=1600;
        }

        if($request->file('url_img')){
            // $this.validate($request,[
            //     'url_img'=>'required|image'
            // ]);
            $fieldFile = $request->file('url_img');

            $mime= $fieldFile->getClientOriginalExtension();
            $imageName = time().".".$mime;

            $image = Image::make($fieldFile)->resize($x, $y);
                // Metodo para guardar en el storage;
             
                $ruta =   Storage::disk('Grakaja')->put("fotoEvento/".$imageName, (string) $image->encode());
            //$ruta = Storage::disk('Grakaja')->put('fotoEvento',$image);
           

            $tImagenes->fill([
                'url_img'=>'http://somosrino.org/storageCeo/fotoEvento/'.$imageName
            ])->save();
            
        }

        return redirect(route('tEventos.show',$tImagenes->t_evento_id));
    }

    /**
     * Display the specified T_imagenes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tImagenes = $this->tImagenesRepository->find($id);

        if (empty($tImagenes)) {
            Flash::error('T Imagenes not found');

            return redirect(route('tImagenes.index'));
        }

        return redirect(route('tEventos.show',$tImagenes->t_evento_id));
    }

    /**
     * Show the form for editing the specified T_imagenes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tImagenes = $this->tImagenesRepository->find($id);

        if (empty($tImagenes)) {
            Flash::error('T Imagenes not found');

            return redirect(route('tImagenes.index'));
        }

        return view('t_imagenes.edit')->with('tImagenes', $tImagenes);
    }

    /**
     * Update the specified T_imagenes in storage.
     *
     * @param int $id
     * @param UpdateT_imagenesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateT_imagenesRequest $request)
    {
        $tImagenes = $this->tImagenesRepository->find($id);

        if (empty($tImagenes)) {
            Flash::error('T Imagenes not found');

            return redirect(route('tImagenes.index'));
        }

        $imagenVieja = $tImagenes->url_img; 
        if (empty($tEvento)) {
            Flash::error('No Encontrado');

            return redirect(route('tEventos.index'));
        }
        // Guarda Todo Execepto url_img
        $tImagenes = $this->tImagenesRepository->update($request->except(['url_img']), $id);

        // Revisiar si estan mandando un archivo. 
        if($request->file('url_img')){
            //Borrar Img Anterior
            Storage::disk('Grakaja')->delete($imagenVieja);
            //Guardar Img Nuevo
            $ruta = Storage::disk('Grakaja')->put('fotoEvento',$request->file('url_img'));
            $tImagenes->fill([
                'url_img'=>'http://somosrino.org/storageCeo/fotoEvento/'.$ruta
            ])->save();
        }

        Flash::success('T Imagenes updated successfully.');

        return redirect(route('tEventos.show',$tImagenes->t_evento_id));
    }

    /**
     * Remove the specified T_imagenes from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tImagenes = $this->tImagenesRepository->find($id);
        $ret = $tImagenes->t_evento_id;
        if (empty($tImagenes)) {
            Flash::error('T Imagenes not found');

            return redirect(route('tEventos.show',$ret));
        }

        $this->tImagenesRepository->delete($id);

        Flash::success('T Imagenes deleted successfully.');

        return redirect(route('tEventos.show',$ret));
    }
}
