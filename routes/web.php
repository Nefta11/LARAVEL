1 <?php

    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\Admin\AdminController;
    use App\Http\Controllers\UserController;
    
    /*
    | Rutas Web
| Aquí es donde puedes registrar rutas web para tu aplicación. Estas
| rutas son cargadas por RouteServiceProvider dentro de un grupo que
| contiene el grupo de middleware "web". ¡Ahora crea algo genial!
*/

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/user/{name}', function ($name) {

        return $name;
    })->where('name', '[A-Za-z]');

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



    // Agrupamos nuestras rutas en un grupo de la siguiente manera 

    Route::namespace('Admin')->group(function () {

        Route::get('/micontroller', [AdminController::class, 'index']);

        Route::get('/micontroller2', [AdminController::class, 'index1']);

        Route::get('/micontroller3', [AdminController::class, 'index2']);
    });


    Route::prefix('seccion')->group(function () {
        Route::get('/uno', function () {
            return 'Primera....';
        });

        Route::get('/dos', function () {
            return 'segundaa....';
        });

        Route::get('/tres', function () {
            return 'terceraa....';
        });
    });


    Route::get('/inicio', [UserController::class, 'index']);

    Route::get('/inicio',[UserController::class, 'index'])->middleware('checkage:80');

    Route::get('/nombre/{name}', [UserController::class, 'showname']);
