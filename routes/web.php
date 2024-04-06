1 <?php

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

    Route::get('/user/{name}', function ($name) {

        return $name;
    })->where('name', '[A-Za-z]');

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    Route::group(['namespace' => 'Admin'], function () {

        Route::get('/micontroller', [AdminController::class, 'index']);

        Route::get('/micontroller2', [AdminController::class, 'index1']);

        Route::get('/micontroller3', [AdminController::class, 'index2']);
    });
