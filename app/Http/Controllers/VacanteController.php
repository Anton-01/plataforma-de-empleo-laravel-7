<?php

namespace App\Http\Controllers;

use App\Salario;
use App\Vacante;
use App\Categoria;
use App\Ubicacion;
use App\Experiencia;
use App\Http\Requests\Vacantes\nueva_vacante;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VacanteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacantes = Vacante::where('user_id', auth()->user()->id)->paginate(10);
        return view('vacantes.index', ['vacantes' => $vacantes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $experiencia = Experiencia::all();
        $salario = Salario::all();
        return view('vacantes.create', [
            'experiencia' => $experiencia,
            'salario' => $salario
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(nueva_vacante $request)
    {
        $data = $request->validated();
        auth()->user()->vacantes()->create([

            'titulo' => $data['titulo'],
            'slug' => time().'-'.Str::slug($data['titulo']),

            'plazas' => $data['plazas'],
            'rfc' => $data['rfc'],
            'experiencia_id' => $data['experiencia'],

            'salario_id' => $data['salario'],
            'escolaridad' => $data['escolaridad'],
            'horario' => $data['horario'],

            'rango' => $data['rango'],
            'sexo' => $data['sexo'],
            'licencia' => $data['licencia'],
            'cartilla' => $data['cartilla'],

            'descripcion' => $data['description'],
            'actividades' => $data['actividades'],
            'habilidades' => $data['habilidades'],
        ]);

        return redirect()->action('VacanteController@index')->with('vacante-guardada-ok', '');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vacante  $vacante
     * @return \Illuminate\Http\Response
     */
    public function show(Vacante $vacante)
    {
        return view('vacantes.show', ['vacante' => $vacante]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vacante  $vacante
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacante $vacante)
    {

        $this->authorize('view', $vacante);
        $categorias = Categoria::all();
        $experiencia = Experiencia::all();
        $ubicacion = Ubicacion::all();
        $salario = Salario::all();
        return view('vacantes.edit', [
            'categorias' => $categorias,
            'experiencia' => $experiencia,
            'ubicacion' => $ubicacion,
            'salario' => $salario,
            'vacante' => $vacante
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vacante  $vacante
     * @return \Illuminate\Http\Response
     */
    public function update( nueva_vacante $request, Vacante $vacante)
    {
        $data = $request->validated();

        $vacante->titulo = $data['titulo'];
        $vacante->slug = time().'-'.Str::slug($data['titulo']);

        $vacante->plazas = $data['plazas'];
        $vacante->rfc = $data['rfc'];
        $vacante->experiencia_id = $data['experiencia'];

        $vacante->salario_id = $data['salario'];
        $vacante->escolaridad = $data['escolaridad'];
        $vacante->horario = $data['horario'];

        $vacante->rango = $data['rango'];
        $vacante->sexo = $data['sexo'];
        $vacante->licencia = $data['licencia'];
        $vacante->cartilla = $data['cartilla'];

        $vacante->descripcion = $data['description'];
        $vacante->actividades = $data['actividades'];
        $vacante->habilidades = $data['habilidades'];
        $vacante->update();

        return redirect()->route('vacantes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vacante  $vacante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacante $vacante)
    {
        $vacante->delete();
        return response()->json(['mensaje' => 'Se elimino la vacante'. $vacante->titulo]);
    }

    public function estado( Request $request, Vacante  $vacante){

        $vacante->condicion = $request->estado;
        $vacante->save();
        return response()->json([ 'respuesta' => 'Correcto' ]);
    }

    public function buscador(Request $request){
        $vacantes    =   Vacante::where("nombre",'like',$request->texto."%")->take(10)->get();
        return view("nombres.paginas",compact("nombres"));
    }


}
