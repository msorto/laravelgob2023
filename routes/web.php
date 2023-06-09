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
    return view('proyecto.index');
});
/* Vista Principal del Proyecto */
Route::get('/proyectos', function () {
    return view('proyecto.index');
});

// Rutas CRUD
/* Crear */
Route::get('proyectos/crear', 'App\Http\Controllers\ProyectosController@crear')->name('proyectos/crear');
Route::put('proyectos/store', 'App\Http\Controllers\ProyectosController@store')->name('proyectos/store');
 
/* Leer */ 
Route::get('proyectos/show/{id}', 'App\Http\Controllers\ProyectosController@show')->name('proyectos/detalles'); 
 
/* Actualizar */
Route::get('proyectos/actualizar/{id}', 'App\Http\Controllers\ProyectosController@actualizar')->name('proyectos/actualizar');
Route::put('proyectos/update/{id}', 'App\Http\Controllers\ProyectosController@update')->name('proyectos/update');
 
/* Eliminar */
Route::put('proyectos/eliminar/{id}', 'App\Http\Controllers\ProyectosController@eliminar')->name('proyectos/eliminar'); 
 
/* Vista Principal Proyectos */ 
Route::get('proyectos/listar', 'App\Http\Controllers\ProyectosController@index')->name('proyectos/listar');
 