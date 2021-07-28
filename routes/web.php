<?php

use App\Http\Controllers\AlumnosController;
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


// forma para llamar solo uno de los metodos del controler
// Route::get('alumnos', [AlumnosController::class,'create']);
//Route::get('create', [AlumnosController::class,'create']);
//Route::get('index', [AlumnosController::class,'index']);





// forma para llamar todos los metodos del Controlador

 Route::resource('/alumnos', AlumnosController::class);


// Route::get('saludando', function () {
//     return 'saludando desde la ruta';
    
// });