<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\T_aprende;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $cat_digital            = T_aprende::where('c_categorias_id','=',1)->get();
        $cat_cliente            = T_aprende::where('c_categorias_id','=',2)->get();
        $cat_negocios           = T_aprende::where('c_categorias_id','=',3)->get();
        $cat_naranja            = T_aprende::where('c_categorias_id','=',4)->get();
        $cat_social             = T_aprende::where('c_categorias_id','=',5)->get();
        $cat_empezar            = T_aprende::where('c_categorias_id','=',6)->get();
        $cat_cursos             = T_aprende::where('c_categorias_id','=',7)->get();
        $cat_recomendaciones    = T_aprende::where('c_categorias_id','=',8)->get();
        
        return view("home",compact('cat_digital','cat_cliente','cat_negocios','cat_naranja','cat_social','cat_empezar','cat_cursos','cat_recomendaciones'));
    }
}
