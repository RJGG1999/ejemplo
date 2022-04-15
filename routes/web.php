<?php

use App\Http\Controllers\TareaController;
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
    return view('welcome');
});

//Forma automatica de generar rutas
Route::resource('/tarea',TareaController::class);

//Forma manual de generar rutas
//Route::get('/tarea', [TareaController::class, 'index']);
//Route::get('/tarea/create', [TareaController::class, 'create']);
//Route::post('/tarea/store', [TareaController::class, 'store']);

//------------------------------------------------Ejemplos--------------------------------------------
Route::get('/hola-mundo', function () {
    return view('paginas/hola-mundo');
});

Route::get('/grabaciones/{nombre}/{aa?}/{cantidad?}', function ($nombre, $aa = null, $cantidad = 10) {
    //dd($nombre);

    //Formas de pasar variables
    //$otra = 'mi otra variable';

    return view('paginas/grabaciones', compact('nombre', 'aa', 'cantidad'));
    /*return view('paginas/grabaciones')
        ->with(['nombre' => $nombre
                'otra' => 'otra variable'
        ]);*/
});
