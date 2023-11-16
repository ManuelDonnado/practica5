<?php

use App\Http\Controllers\UsuarioController;
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

Route::get('/addUsuarios', function () {
    return view('addUser');
});

Route::post('/guardar-registro', [UsuarioController::class, 'store'])->name('guardar.registro');

//Route::get('/addUsuarios', [UsuarioController::class, 'store'])->name('addUsuarios');



