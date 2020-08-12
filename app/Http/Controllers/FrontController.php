<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\T_evento;
use App\Models\C_categoria;
use App\Models\T_bazar;

class FrontController extends Controller
{
    function index(){
        $ponentes = T_evento::where('tipo_evento_id','=',5)->skip(0)->take(6)->get();
        return view("front_layout.home",compact('ponentes'));
    }
    function encuentro(){
    	return view("front_layout.encuentro-2020");
    }
    function nosotros(){
    	return view("front_layout.nosotros");
    }
    function ponentes(){
        $ponentes = T_evento::where('tipo_evento_id','=',5)->get();
       // dd($ponentes);
    	return view("front_layout.ponentes",compact('ponentes'));
    }
    function bazar(){
        $categorias = C_categoria::get();
        $bazares    = T_bazar::get();
    	return view("front_layout.bazar_emprendedores",compact('categorias','bazares'));
    }
    function loginFront(){
    	return view("front_layout.login");
    }
}
