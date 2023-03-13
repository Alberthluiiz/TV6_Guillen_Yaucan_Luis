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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/* ---------- LITERAL [ A ] ---------- */
Route::get('/movie/{titulo?}', function ($titulo = 'No hay película seleccionada') {
    return view('movie', array(
        'titulo' => $titulo
    ));
});


/* ---------- LITERAL [ B ] ---------- */
Route::get('/series/{caracter?}',function($caracter='No hay serie seleccionada'){
    return view('series',array('caracter'=>$caracter));
})->where(array('caracter'=>'[a-z]+$'));

/* ---------- LITERAL [ C ] ---------- */
/* --- DISEÑO VISTA DE PRESENTACION --- PLANTILLA-MASTER --- */
Route::get('/principal', function () {
    return view('principal');
});

/* ---------- LITERAL [ D ] ----------  NoticiasController ---------- */
Route::get('/noticias','App\Http\Controllers\NoticiasController@index');

/* ---------- LITERAL [ E ] ---------- UsuarioController ---------- */
Route::resource('/usuario','App\Http\Controllers\UsuarioController');

/* ---------- LITERAL [ F ] ---------- */
/* --- Rutas --- */
/* Route::get('/register', [RegisterController::class, 'index'])-> name('register');
Route::post('/register', [RegisterController::class, 'store']);
 */

Route::group(['prefix' => 'suscribir'], function () {
    Route::get('crear', 'App\Http\Controllers\SuscribirController@create');
    Route::post('save', 'App\Http\Controllers\SuscribirController@save');
});

Route::get('suscripcion', 'App\Http\Controllers\SuscribirController@create');
Route::get('listarSuscripcion', 'App\Http\Controllers\SuscribirController@index');
