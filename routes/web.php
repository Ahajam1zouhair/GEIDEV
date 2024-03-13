<?php

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

Route::get('/', function () {
    return view('Dashboard.Dashboard');
});

Route::resource('/stagiaire', StagiaireController::class);
Route::resource('/stagiaire', StagiaireController::class);
Route::post('/stagiaire/search', [StagiaireController::class, 'search'])->name('stagiaire_search');
Route::get('/stagiairesdata', [StagiaireController::class, 'apiIndex']);
