<?php

namespace App\Http\Controllers;

use App\Vacante;
use Illuminate\Http\Request;

class VistasController extends Controller
{
    //
    public function contacto(){
        return view('frontend.contacto');
    }

    public function trabajos(){
        $vacantes = Vacante::orderBy('id', 'DESC')->where('condicion', 1)->paginate(12);
        return view('frontend.trabajos', compact('vacantes'));
    }
}
