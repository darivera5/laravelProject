<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Mentores;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/registrarSeguimiento', function () {
    return view('registrarSeguimiento');
});

Route::get('/consultarEmprendedor', function () {
    return view('consultarEmprendedor');
});


Route::get('/realizarAutoDiagnostico', function () {
    return view('realizarAutoDiagnostico');
});


Route::get('/home_mentor', function () {
    return view('home_mentor');
});

Route::get('/filtrarInformacionEmp', function () {
    return view('filtrarInformacionEmp');
});

Route::get('registrarMentores',[Mentores::class ,'index']);
Route::post('add',[Mentores::class ,'add']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
