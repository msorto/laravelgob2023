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
Route::get('proyectos/detalle/{id}', 'App\Http\Controllers\ProyectosController@detalle')->name('proyectos/detalles'); 
 
/* Actualizar */
//Para desplegar la vista actualizar
Route::get('proyectos/actualizar/{id}', 'App\Http\Controllers\ProyectosController@actualizar')->name('proyectos/actualizar');
//Para post del formulario actualizar
Route::put('proyectos/update/{id}', 'App\Http\Controllers\ProyectosController@update')->name('proyectos/update');
 
/* Eliminar */
Route::put('proyectos/eliminar/{id}', 'App\Http\Controllers\ProyectosController@eliminar')->name('proyectos/eliminar'); 
 
/* Vista Principal Proyectos */ 
Route::get('proyectos/listar', 'App\Http\Controllers\ProyectosController@index')->name('proyectos/listar');
 
/* Vista de reporte */
Route::get('proyectos/reporte', 'App\Http\Controllers\ProyectosController@reporte')->name('proyectos/reporte');