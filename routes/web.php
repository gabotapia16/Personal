<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     // return view('welcome');
//     //return "hola pinche putitta";
// });

Route::get('/', HomeController::class);

Route::get('cursos', [CursoController::class, 'index']);

Route::get('cursos/create', [CursoController::class, 'create']);

Route::get('cursos/create/{curso}', [CursoController::class, 'show']);
/*
Route::get('cursos',function(){
    return "pagina de cursos";
});
/*
Route::get('cursos/create', function () {
    return "en esta pagina podras crear un curso";
});


// Route::get('cursos/{curso}',function($curso){
//     return "esto se esta descontolando: $curso";
// });

Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria=null) {
    if ($categoria) {
        return "vas a entrar al curso de $curso, haciendo $categoria";
    }else{
        return "vas a entrar SOLO al curso de $curso";
    }
    
});*/