<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\CursoController;
use App\Mail\ContactanosMailable;

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

Route::get('/', homeController::class)->name('home');

Route::view('nosotros', 'nosotros')->name('nosotros');

// ruta para el envio de correos 
// Route::get('contactanos', function(){
//     $correo = new ContactanosMailable;

//     Mail::to('xxdndkxx@gmail.com')->send($correo);

//     return 'mensaje enviado';
// })->name('contactanos.index');

Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');

Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');

// Route::get('cursos', [CursoController::class, 'index']);

// Route::get('cursos/create', [CursoController::class, 'create']);

// // ruta con variable y pasada como parametro a la funcion
// Route::get('cursos/{curso}', [CursoController::class, 'show']);



// grupo de controladores
Route::controller(CursoController::class)->group(function () {

    Route::get('cursos', 'index')->name('cursos.index');

    Route::get('cursos/create', 'create')->name('cursos.create');

    Route::post('cursos', 'store')->name('cursos.store');
    // ruta con variable y pasada como parametro a la funcion
    Route::get('cursos/{curso}', 'show')->name('cursos.show');

    Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit');

    Route::put('cursos/{curso}', 'update')->name('cursos.update');

    Route::delete('cursos/{curso}', 'destroy')->name('cursos.destroy');
});








// rutas separadas
// Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

// Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

// Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');
// // ruta con variable y pasada como parametro a la funcion
// Route::get('cursos/{id}', [CursoController::class, 'show'])->name('cursos.show');

// Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

// Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');


// rutas amigables por crud
// Route::resource('cursos', CursoController::class);





//metodo para cambiar el nombre de la url pero conservando la ruta 
// Route::resource('asignaturas', CursoController::class)->names('cursos');


// Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos');