<?php

namespace App\Http\Controllers;

use App\Vacante;
use App\Candidato;
use App\Postulado;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\NuevoCandidato;

class CandidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //dd($request->route('id'), 'hola');
        $vacante_id = $request->route('id');
        $vacante = Vacante::where('slug',$vacante_id)->first();
        return view('candidatos.index', compact('vacante'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'telefono' => 'required',
            'correo' => 'nullable|email',
            'cv' => 'nullable|mimes:pdf|max:30000',
            'nota' => 'nullable',
            'vacante_id' => 'required'
        ]);


        $vacante = Vacante::find($data['vacante_id']);

        if ( $request->file('cv')) {
            $cv = $request->file('cv');
            $nombre_pdf = Str::random(5).time().".".$cv->extension();
            $path_pdf = public_path().'/candidatos/pdf/';
            $cv->move($path_pdf, $nombre_pdf);
        }


        $candidato = new Candidato([
            'nombre' => $data['nombre'],
            'telefono' => $data['telefono'],
            'email' => $data['correo'],
            'cv' => isset($nombre_pdf) ? $nombre_pdf : '',
            'mensaje' => $data['nota'],
            'vacante_id' => $data['vacante_id'],
            'vacante_slug' => $vacante->slug
        ]);

        $candidato->save();

        $reclutador = $vacante->reclutador;
        $reclutador->notify(new NuevoCandidato( $vacante->titulo, $vacante->id, $vacante->slug) );

        $postulado = new Postulado();
        $postulado->vacante = $vacante->titulo;
        $postulado->empresa = $vacante->reclutador->name;
        $postulado->usuario = $data['nombre'];
        $postulado->contacto = $data['telefono'];
        $postulado->postulado = Carbon::now();
        $postulado->save();

        return redirect()->back()->with('candidato-aplicado-ok', '');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function show(Candidato $candidato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidato $candidato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidato $candidato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidato $candidato)
    {
        //
    }

    public function detalles($uid){
        $candidato = Candidato::where('id', $uid)->first();
        return view('candidatos.detalle', compact('candidato'));
    }
}
