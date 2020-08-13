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
        $cat_aprende         = T_aprende::where('c_categorias_id','=',3)->get();
        $cat_herramientas    = T_aprende::where('c_categorias_id','=',4)->get();
        $recomendaciones_ceo = T_aprende::where('c_categorias_id','=',5)->get();
        
        return view("home",compact('cat_aprende','cat_herramientas','recomendaciones_ceo'));
    }
}
