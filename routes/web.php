<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puede registrar rutas web para su aplicación. Estas rutas
| son cargadas por el RouteServiceProvider y todas ellas serán
| serán asignadas al grupo de middleware «web». ¡Haz algo grande!
|
*/

Route::get('/', [PageController::class, 'home'])->name('home');

// Route::resource('productos', ProductoController::class)
Route::resource('productos', ProductoController::class)
    ->except(['show'])
    ->names([
        'index' => 'productos.index',
        'create' => 'productos.create',
        'store' => 'productos.store',
        'edit' => 'productos.edit',
        'update' => 'productos.update',
        'destroy' => 'productos.destroy',
    ]);

