<?php

use App\Http\Controllers\DachboardController;
use App\Http\Controllers\FilieresController;
use App\Http\Controllers\GroupesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StagiaireController;
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



Route::get('/', [DachboardController::class, 'index'])->middleware(['auth', 'verified']);
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DachboardController::class, 'index'])->name('dashboard');

    // Profile routes
    Route::prefix('profile')->group(function () {
        Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/update', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
    // Routes pour les stagiaires
    Route::resource('/stagiaire', StagiaireController::class);
    Route::get('/stagiairesdata', [StagiaireController::class, 'apiIndex']);

    // Routes pour les groupes
    Route::get('/groupesdata', [GroupesController::class, 'apiCreate']);

    // Routes pour les bénéficiaires
    Route::get('/beneficiaire/create', [StagiaireController::class, 'createBeneficiaire'])->name('beneficiaire.create');

    // Route pour récupérer les groupes d'une filière spécifique
    Route::get('/fetch-groupes/{filiereId}', [FilieresController::class, 'fetchGroupes']);
});

// Inclusion des routes d'authentification
require __DIR__ . '/auth.php';
