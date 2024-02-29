<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('formulario');
});

 
Route::get('/cliente',[ClienteController::class,'create']);
Route::post('/cliente',[ClienteController::class,'store'])->name('cliente.store');
    
Route::get('/moto',[MotoController::class,'create']);
Route::post('/moto',[MotoController::class,'store'])->name('moto.store');

Route::get('/movie',[MovieController::class,'create']);
Route::post('/movie',[MovieController::class,'store'])->name('movie.store');