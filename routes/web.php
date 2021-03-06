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
//Route pour la gestion proprietaire
Route::get('/proprietaire', [ProprietaireController::class, 'ajout']);
Route::post('/proprietaire', [ProprietaireController::class, 'recuperation']);
Route::get('list', [ProprietaireController::class, 'list']);

Route::get('proprietaires/supprimer/{id}', [ProprietaireController::class, 'supprimer']); //Route supprimer
Route::get('proprietaires/recupere/{id}', [ProprietaireController::class, 'recupere']); //La route pour Recuperer un proprietaire
Route::post('proprietaires/modifier/{id}', [ProprietaireController::class, 'modifier']);

//Route pour la gestion propriete
Route::get('proprietes', [ProprieteController::class, 'lister']);
Route::get('/propriete', [ProprieteController::class, 'ajout']);
Route::post('proprietes/enregistrer', [ProprieteController::class, 'enregistrer']);
Route::get('proprietes/supprimer/{id}', [ProprieteController::class, 'supprimer']);
Route::get('proprietes/recupere/{id}', [ProprieteController::class, 'recupere']);
Route::post('proprietes/modifier/{id}', [ProprieteController::class, 'modifier']);

Route::get('exporter-propriete', [ProprieteController::class, 'pdfpropriete']);
Route::get('exporter-proprietaire', [ProprietaireController::class, 'pdfproprietaire']);

Route::get('download-propriete', [ProprieteController::class, 'downloadpropriete']);
Route::get('download-proprietaire', [ProprietaireController::class, 'downloadproprietaire']);

require __DIR__ . '/auth.php';
