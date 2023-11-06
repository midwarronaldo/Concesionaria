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
use App\Http\Controllers\AutomovilController;
//use App\Models\Alumno;
//use App\Http\Controllers\PublicacionController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AutomovilController::class)->group(function(){
Route::get('/automovil','index');
Route::get('/automovil/ver/{id}','show');
Route::get('/automovil/crear','create');
Route::post('/automovil/crear','store');
Route::get('automovil/editar{id}','edit');
Route::put('/automovil/editar/{id}','update');
Route::delete('/automovil/eliminar/{id}','destroy');
});