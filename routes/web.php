<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    Route::get('/vacantes', 'VacanteController@index')->name('vacantes.index');

    Route::get('/vacantes/create', 'VacanteController@create')->name('vacantes.create');
    Route::post('/vacantes', 'VacanteController@store')->name('vacantes.store');

    Route::get('/vacantes/{vacante}/edit', 'VacanteController@edit')->name('vacantes.edit');
    Route::put('/vacantes/{vacante}', 'VacanteController@update')->name('vacantes.update');

    Route::delete('/vacantes/destroy/{vacante}', 'VacanteController@destroy')->name('vacantes.destroy');



    Route::post('/vacantes/imagen', 'VacanteController@imagen')->name('vacantes.imagen');
    Route::post('/vacantes/borrar-imagen', 'VacanteController@borrarImagen')->name('vacantes.borrar-imagen');
    Route::post('/vacantes/{vacante}', 'VacanteController@estado')->name('vacantes.estado');

    Route::get('/notificaciones', 'NotificacionesController')->name('notificaciones');

    Route::get('/candidatos/{id}', 'CandidatoController@index')->name('candidatos.index');

    //Rutas del administrador
    Route::get('/administrador', 'DashboardController@index')->name('dashboard.index');

    Route::get('/administrador/empresas-ajax', 'DashboardController@empresasAjax')->name('empresas.ajax');
    Route::get('/administrador/empresas-to-pdf', 'DashboardController@empresasPdf')->name('empresas.exportpdf');
    Route::get('/administrador/empresas-to-excel', 'DashboardController@empresasExcel')->name('empresas.exportexcel');


    Route::get('/administrador/vacantes-ajax', 'DashboardController@vacantesAjax')->name('vacantes.ajax');
    Route::get('/administrador/vacantes-to-pdf', 'DashboardController@vacantesPdf')->name('vacantes.exportpdf');
    Route::get('/administrador/vacantes-to-excel', 'DashboardController@vacantesExcel')->name('vacantes.exportexcel');

    Route::get('/administrador/postulados-ajax', 'DashboardController@postuladosAjax')->name('postulados.ajax');
    Route::get('/administrador/postulados-to-pdf', 'DashboardController@postuladosPdf')->name('postulados.exportpdf');
    Route::get('/administrador/postulados-to-excel', 'DashboardController@postuladosExcel')->name('postulados.exportexcel');

});

Route::get('/', 'InicioController')->name('inicio');
Route::get('/contacto', 'VistasController@contacto')->name('contacto');
Route::get('/encuentra-un-trabajo', 'VistasController@trabajos')->name('trabajos');

Route::get('/categoria/{categoria}', 'CategoriaController@show')->name('categorias.show');
Route::post('/candidatos/store', 'CandidatoController@store')->name('candidatos.store');

Route::get('/sefeco/buscar', 'VacanteController@resultados')->name('vacantes.resultados');

Route::get('/vacantes/{vacante}', 'VacanteController@show')->name('vacantes.show');


