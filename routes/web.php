<?php

use App\Http\Controllers\solicitudController;
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

Route::get('/eventos', function () {
    return view('welcome');
})->name('dash');


Route::get('/', function () {
    return view('Vistas.index');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('log');

Route::get('/form2', [solicitudController::class, 'Formulario'])->name('formulario');

Route::get('/form', function () {
    return view('Vistas.Formulario');
})->name('form');


Route::get('/solicitudes', function () {
    return view('Vistas.Solicitudes');
})->name('solicitudes');

Route::get('/Umi-solicitud', function () {
    return view('Dependenicas.Umi.UmiSolicitud');
})->name('umi-solicitud');



Route::get('/umi', function () {
    return view('Dependenicas.Umi.Umi');
})->name('umi');


Route::get('/inventarioUmi', function () {
    return view('Dependenicas.Umi.inventarioUmi');
})->name('inventarioUmi');










