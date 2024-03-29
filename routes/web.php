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

Route::get('/', function () {
    return redirect('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/bodegas', 'BodegaController@consulta')->name('bodegas');

Route::get('/busquedaBodegas','BodegaController@search');

Route::get('/productos', 'ProductoController@consultaProductos')->name('productos');

Route::get('/crearBodega','BodegaController@create')->name('bodega.create');

Route::get('/almacenarBodega','BodegaController@store')->name('bodega.store');
