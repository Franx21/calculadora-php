<?php

use App\Http\Controllers\calculadoraController;
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

Route::get('/CALCULADORA'   , function () {
    return view('welcome');
});

Route::post('/CALCULADORA', [calculadoraController::class, 'calculate'])->name('calculadora.calculate');
