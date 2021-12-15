<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitaController;
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

Route::get('/', function () {
    return view('contenedor/visita/inicio');
});
Route::get("inicio_index", [VisitaController::class, "inicio_index"])->name('inicio_index');
Route::get("entrevistas_index", [VisitaController::class, "entrevistas_index"])->name('entrevistas_index');
Route::get("nosotros_index", [VisitaController::class, "nosotros_index"])->name('nosotros_index');
Route::get("noticias_index", [VisitaController::class, "noticias_index"])->name('noticias_index');
Route::get("noticiaUno_index", [VisitaController::class, "noticiaUno_index"])->name('noticiaUno_index');
Route::get("programacion_index", [VisitaController::class, "programacion_index"])->name('programacion_index');
Route::get("radiohit_index", [VisitaController::class, "radiohit_index"])->name('radiohit_index');
Route::get("top20_index", [VisitaController::class, "top20_index"])->name('top20_index');

