<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\Guest\MovieController;
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

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/chi-siamo', function () {
    return view('subpages.about');
});

Route::get('{id}', [PageController::class, 'show'])->name('show');

// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)
