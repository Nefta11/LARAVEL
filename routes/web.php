<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rutas Web
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar rutas web para tu aplicación. Estas
| rutas son cargadas por RouteServiceProvider dentro de un grupo que
| contiene el grupo de middleware "web". ¡Ahora crea algo genial!
|
*/


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
