1   <?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
/*
|--------------------------------------------------------------------------
| Rutas Web
| Aquí es donde puedes registrar rutas web para tu aplicación. Estas
| rutas son cargadas por RouteServiceProvider dentro de un grupo que
| contiene el grupo de middleware "web". ¡Ahora crea algo genial!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{name}', function($name){

    return $name;
})-> where('name','[A-Za-z]');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get ('/micontroller',[AdminController::class, 'index1']);