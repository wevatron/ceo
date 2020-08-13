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
        $aprendes = T_aprende::get();
        return view('home',compact('aprendes'));
    }
}
