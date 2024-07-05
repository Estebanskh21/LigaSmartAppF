<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArbitroController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LigaController;
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\RespuestaController;
use App\Http\Controllers\FootballStandingsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::fallback(function () {
    return view('errors.404');
});
Route::get('/', function () {
    return view('inicio/index');
});

Route::get('/viewlogin', [LoginController::class, 'index'])->name('login.index');

// Route::get('/', [LoginController::class, 'index'])->name('login.index');

Route::get('/nuevouser', [RegisterController::class, 'show'])->name('register.show');
Route::post('/register', [RegisterController::class, 'register'])->name('register.register');

Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::middleware(['auth', 'role:arbitro'])->group(function () {
    Route::get('/dashboard/arbitro', [ArbitroController::class, 'index'])->name('dashboard.arbitro');
});

Route::middleware(['auth', 'role:player'])->group(function () {
    Route::get('/dashboard/player', [PlayerController::class, 'index'])->name('player.index');
    Route::get('/ayuda', function () {
        return view('ayuda/index');
    })->name('ayuda.index');
    Route::get('/foro/create', [TemaController::class, 'create'])->name('temas.create');
    Route::get('/foro/index', [TemaController::class, 'index'])->name('temas.index');
    Route::get('/foro/{tema}', [TemaController::class, 'show'])->name('temas.show');
    Route::post('/foro/{tema}/respuesta/store', [RespuestaController::class, 'store'])->name('respuestas.store');
    Route::get('/foro/{tema}/respuesta/create', [RespuestaController::class, 'create'])->name('respuestas.create');

});

Route::middleware(['auth', 'role:owner'])->group(function () {
    Route::get('/dashboard/owner', [OwnerController::class, 'index'])->name('owner.index');
    Route::get('/liga', [LigaController::class, 'index'])->name('liga.tabla');
    Route::get('/searchLiga', [LigaController::class, 'search'])->name('ligas.search');

    Route::get('/jugadores', [JugadorController::class, 'index'])->name('jugadores.index');
    Route::get('/jugadores/create', [JugadorController::class, 'create'])->name('jugadores.create');
    Route::post('/jugadores', [JugadorController::class, 'store'])->name('jugadores.store');
    Route::get('/jugadores/{jugador}/edit', [JugadorController::class, 'edit'])->name('jugadores.edit');
    Route::put('/jugadores/{jugador}', [JugadorController::class, 'update'])->name('jugadores.update');
    Route::delete('/jugadores/{jugador}', [JugadorController::class, 'destroy'])->name('jugadores.destroy');

    Route::get('/ligas', [LigaController::class, 'index'])->name('ligas.index');
    Route::get('/ligas/create', [LigaController::class, 'create'])->name('ligas.create');
    Route::post('/ligas', [LigaController::class, 'store'])->name('ligas.store');
    Route::get('/ligas/{liga}/edit', [LigaController::class, 'edit'])->name('ligas.edit');
    Route::put('/ligas/{liga}', [LigaController::class, 'update'])->name('ligas.update');
    Route::delete('/ligas/{liga}', [LigaController::class, 'destroy'])->name('ligas.destroy');

    Route::get('/searchJugador', [JugadorController::class, 'search'])->name('jugadores.search');
    Route::get('/foro/create', [TemaController::class, 'create'])->name('temas.create');
    Route::post('/foro/store', [TemaController::class, 'store'])->name('temas.store');
    Route::get('/football/standings', [FootballStandingsController::class, 'showStandings'])->name('football.standings');


});



