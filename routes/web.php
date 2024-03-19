<?php

use App\Http\Controllers\private\abonne\AbonneTableaudebordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\public\AcceuilController;
use App\Http\Controllers\public\EvenementController;
use App\Http\Controllers\private\admin\AdminTableaudebordController;
use App\Http\Controllers\private\promoteur\PromoteurTableaudebordController;
use App\Http\Controllers\public\AuthController;

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
#Public routes
Route::get('/', [AcceuilController::class, 'index'])->name('acceuil');
Route::get('/deconnexion', [AuthController::class, 'deconnexion'])->name('deconnexion');
Route::get('/evenements', [EvenementController::class, 'index'])->name('public.evenements');

#Private routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin-tableau-de-bord', [AdminTableaudebordController::class, 'adminTableaudebord'])->name('private.adminTableaudebord');
});

Route::middleware(['auth', 'role:promoteur'])->group(function () {
    Route::get('/promoteur-tableau-de-bord', [PromoteurTableaudebordController::class, 'promoteurTableaudebord'])->name('private.promoteurTableaudebord');
});

Route::middleware(['auth', 'role:abonne'])->group(function () {
    Route::get('/abonne-tableau-de-bord', [AbonneTableaudebordController::class, 'abonneTableaudebord'])->name('private.abonneTableaudebord');
});

#Auth routes
Route::get('/inscription-option', [AuthController::class, 'inscriptionOption'])->name('public.inscription-option');
Route::get('/inscription-promoteur', [AuthController::class, 'inscriptionPromoteur'])->name('public.inscription-promoteur');
Route::post('/inscription-promoteur-action', [AuthController::class, 'inscriptionPromoteurAction'])->name('public.inscription-promoteur-action');
Route::get('/inscription-abonné', [AuthController::class, 'inscriptionAbonné'])->name('public.inscription-abonné');
Route::post('/inscription-abonné-action', [AuthController::class, 'inscriptionAbonnéAction'])->name('public.inscription-abonné-action');
Route::get('/connexion', [AuthController::class, 'connexion'])->name('public.connexion');
Route::post('/connexion-action', [AuthController::class, 'connexionAction'])->name('public.connexion-action');
