<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProprieteController;
use App\Http\Controllers\ProprietaireController;

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



Route::get('proprietes', [ProprieteController::class, 'lister']);
Route::get('/propriete', [ProprieteController::class, 'ajout']);
Route::post('proprietes/enregistrer', [ProprieteController::class, 'enregistrer']);


require __DIR__ . '/auth.php';
