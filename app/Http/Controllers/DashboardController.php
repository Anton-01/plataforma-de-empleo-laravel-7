<?php

namespace App\Http\Controllers;

use App\User;
use datatables;
use App\Vacante;
use App\Postulado;
use App\Exports\VacantesExport;
use App\Exports\PostuladosExport;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;

class DashboardController extends Controller
{
    public function index(){
        $empresas = User::count()-1;
        $vacantes = Vacante::count();
        $postulados = Postulado::count();
        return view('admin.dashboard', compact(['empresas', 'vacantes', 'postulados']));
    }

    //Métodos para las empresas
    public function empresasAjax(){
        if ( request()->ajax() ) {
            $empresas = User::select('id', 'name', 'email', 'telefono', 'actividad_economica')->where('rol', 'empresa')->get();
            return datatables()->of($empresas)->toJson();
        }else{
            return back();
        }
    }
    public function empresasPdf(){
        $empresas = User::select('id', 'name', 'email', 'telefono', 'actividad_economica')->where('rol', 'empresa')->get();
        $pdf = PDF::loadView('pdf.empresas', compact('empresas'));
        return $pdf->download('empresas-sefeco.pdf');
    }

    public function empresasExcel(){
        return Excel::download(new UsersExport, 'empresas-sefeco.xlsx');
    }

    //Métodos para las vacantes
    public function vacantesAjax(){
        if ( request()->ajax() ) {
            $vacantes = Vacante::select('id','titulo','rfc','plazas','escolaridad','sexo')->get();
            return datatables()->of($vacantes)->toJson();
        }else{
            return back();
        }
    }
    public function vacantesPdf(){
        $vacantes = Vacante::select('id', 'titulo', 'plazas', 'escolaridad', 'sexo', 'rfc')->get();
        $pdf = PDF::loadView('pdf.vacantes', compact('vacantes'));
        return $pdf->download('vacantes-sefeco.pdf');
    }
    public function vacantesExcel(){
        return Excel::download(new VacantesExport, 'vacantes-sefeco.xlsx');
    }

    //Métodos para las postulados
    public function postuladosAjax(){
        if ( request()->ajax() ) {
            $postulados = Postulado::select('id','vacante','empresa','usuario','contacto','postulado')->get();
            return datatables()->of($postulados)->toJson();
        }else{
            return back();
        }
    }
    public function postuladosPdf(){
        $postulados = Postulado::select('id', 'vacante', 'empresa', 'usuario', 'contacto', 'postulado')->get();
        $pdf = PDF::loadView('pdf.postulados', compact('postulados'));
        return $pdf->download('postulados-sefeco.pdf');
    }
    public function postuladosExcel(){
        return Excel::download(new PostuladosExport, 'postulados-sefeco.xlsx');
    }
}
