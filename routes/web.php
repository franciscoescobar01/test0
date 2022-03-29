<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsignaturaController;
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
    return view('welcome');
});

Route::get('/app', function () {
    return view('app');
});

Route::get('/cargarAsignaturas', function () {
    return view('cargarAsignaturas');
});

Route::get('/asignaturas',function (){
    return view('index');
})->name('asignaturas');

//Route::get('/Asignatura',[AsignaturaController::class, 'index'])->name('asignaturas');
Route::post('/asignatura',[AsignaturaController::class, 'store'])->name('asignaturas');

Route::get('/asignatura/{id}',[AsignaturaController::class, 'store'])->name('asignaturas-show');
Route::patch('/asignatura',[AsignaturaController::class, 'store'])->name('asignaturas-update');
Route::delete('/asignatura',[AsignaturaController::class, 'store'])->name('asignaturas-destroy');
