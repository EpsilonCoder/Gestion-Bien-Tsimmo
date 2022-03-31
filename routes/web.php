<?php

use App\Http\Controllers\ProprietaireController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/proprietaire', [ProprietaireController::class, 'ajout']);
Route::post('/proprietaire', [ProprietaireController::class, 'recuperation']);
Route::get('list', [ProprietaireController::class, 'list']);



require __DIR__ . '/auth.php';
