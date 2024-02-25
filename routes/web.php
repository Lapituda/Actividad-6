<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|


--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/productos', 'ProductoController@index')->name('productos.index');
Route::get('/productos/crear', 'ProductoController@create')->name('productos.create');
Route::post('/productos', 'ProductoController@store')->name('productos.store');
Route::get('/productos/{producto}/editar', 'ProductoController@edit')->name('productos.edit');
Route::patch('/productos/{producto}', 'ProductoController@update')->name('productos.update');
Route::delete('/productos/{producto}', 'ProductoController@destroy')->name('productos.destroy');




Route::get('/', function () {
    return view('welcome');
});


public function index()
{
    return view('productos.index');
}

public function create()
{
    return view('productos.create');
}

public function edit(Producto $producto)
{
    // No es necesario devolver una vista aquí, solo mantener la ruta y la función en el controlador
    // La vista de edición se manejará desde la vista index
}

// Otros métodos como store, update y destroy deben ser implementados según sea necesario



<a href="{{ route('productos.create') }}" class="btn btn-primary">Agregar producto</a>
