<?php

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
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');

Route::get('/phishing', function () {
    return view('phishing');
})->name('phishing');

Route::get('/actividad1', function () {
    return view('actividad1');
})->name('actividad1');

Route::get('/iniciarsesion', function () {
    return view('iniciarsesion');
})->name('iniciarsesion');

Route::get('/actividad2', function () {
    return view('actividad2');
})->name('actividad2');

Route::get('/autenticacion2FA', function () {
    return view('autenticacion2FA');
})->name('autenticacion2FA');

Route::get('/act2FA', function () {
    return view('act2FA');
})->name('act2FA');

Route::get('/act2FA2', function () {
    return view('act2FA2');
})->name('act2FA2');

Route::get('/foro', function () {
    return view('foro');
})->name('foro');

Route::get('/perfil', function () {
    return view('perfil');
})->name('perfil');

Route::get('/Actividad-1', function () {
    return view('Actividad-1');
})->name('Actividad-1');

Route::get('/Actividad-2', function () {
    return view('Actividad-2');
})->name('Actividad-2');