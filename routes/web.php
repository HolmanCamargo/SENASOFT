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

Route::middleware(['lang','web'])->group(function () {

	Route::get('/lang/{lang}', function ($lang) {
		session(['lang' => $lang]);
		return Redirect::back();
	})->where(['lang' => 'en|es']);

	Route::get('/', function () {
	    return view('tecnovi.index');
	})->name('tecnovi.index');

	Route::get('/poblacion', function () {
	    return view('tecnovi.poblacion');
	})->name('tecnovi.poblacion');

	Route::get('/desarrolladores', function () {
	    return view('tecnovi.desarrolladores');
	})->name('tecnovi.desarrolladores');



	Route::get('/insumos', function () {
	    return view('insumos.index');
	})->name('insumos.index');

	Route::get('/seguimiento', function () {
	    return view('seguimiento.index');
	})->name('seguimiento.index');


	Route::get('/operadores', function () {
	    return view('operadores.index');
	})->name('operadores.index');
});