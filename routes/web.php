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



Route::get('/', function () {return view('alquilar.inicio');})->name('alquilar.inicio');
Route::get('/sobrenosotros', function () {return view('alquilar.sobrenosotros');})->name('alquilar.sobrenosotros');
Route::get('/contacto', function () {return view('alquilar.contacto');})->name('alquilar.contacto');
Route::get('/blog', function () {return view('alquilar.blog');})->name('alquilar.blog');

