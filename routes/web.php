<?php

use App\Http\Controllers\ProprietaireController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Auth.login');
});

Route::get('/dashboard', function () {
    return view('proprietaire.list');
})->middleware(['auth'])->name('dashboard');

Route::get('/proprietaire', [ProprietaireController::class, 'ajout']);
Route::post('/proprietaire', [ProprietaireController::class, 'recuperation']);
Route::get('list', [ProprietaireController::class, 'list']);

Route::get('/propriété', [ProprietaireController::class, 'list']);

require __DIR__ . '/auth.php';
