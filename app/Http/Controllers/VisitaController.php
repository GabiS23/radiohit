<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class VisitaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function inicio_index()
    {
        return view('contenedor/visita/inicio');
    }
    public function entrevistas_index()
    {
        return view('contenedor/visita/entrevistas');
    }
    public function nosotros_index()
    {
        return view('contenedor/visita/nosotros');  
    }
    public function noticias_index()
    {
        return view('contenedor/visita/noticias');
    }
    public function noticiaUno_index()
    {
        return view('contenedor/visita/noticiaUno');
    }
    public function programacion_index()
    {
        return view('contenedor/visita/programacion');
    }
    public function radiohit_index()
    {
        return view('contenedor/visita/radiohit');
    }
    public function top20_index()
    {
        return view('contenedor/visita/top20');
    }
}