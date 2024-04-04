<?php

use App\Http\Controllers\DachboardController;
use App\Http\Controllers\FilieresController;
use App\Http\Controllers\GroupesController;
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

// Route::get('/', function () {
//     return view('Dashboard.Dashboard');
// });
Route::get('/', [DachboardController::class, 'index']);
Route::resource('/stagiaire', StagiaireController::class);
// Route::post('/stagiaire/Beneficiaire', [StagiaireController::class, 'createBeneficiaire'])->name('stagiaire.createBeneficiaire');
Route::get('/stagiairesdata', [StagiaireController::class, 'apiIndex']);
Route::get('/groupesdata', [GroupesController::class, 'apiCreate']);
Route::get('/beneficiaire/create', [StagiaireController::class, 'createBeneficiaire'])->name('beneficiaire.create');
Route::get('/fetch-groupes/{filiereId}', [FilieresController::class, 'fetchGroupes']);
