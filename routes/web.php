<?php

use App\Http\Controllers\private\abonne\AbonneController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\public\AcceuilController;
use App\Http\Controllers\public\EvenementController;
use App\Http\Controllers\private\admin\AdminTableaudebordController;
use App\Http\Controllers\private\promoteur\PromoteurController;
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
Route::get('/evenements', [EvenementController::class, 'index'])->name('public.evenements');
#Private routes
Route::get('/admin-tableau-de-bord', [AdminTableaudebordController::class, 'adminTableaudebord'])->name('private.adminTableaudebord');
Route::get('/abonne-tableau-de-bord', [AbonneController::class, 'abonneTableaudebord'])->name('private.abonneTableaudebord');
Route::get('/promoteur-tableau-de-bord', [PromoteurController::class, 'promoteurTableaudebord'])->name('private.promoteurTableaudebord');
#Auth routes
Route::get('/inscription-option', [AuthController::class, 'inscriptionOption'])->name('public.inscription-option');
Route::get('/inscription-promoteur', [AuthController::class, 'inscriptionPromoteur'])->name('public.inscription-promoteur');
Route::post('/inscription-promoteur-action', [AuthController::class, 'inscriptionPromoteurAction'])->name('public.inscription-promoteur-action');
Route::get('/inscription-abonné', [AuthController::class, 'inscriptionAbonné'])->name('public.inscription-abonné');
Route::post('/inscription-abonné-action', [AuthController::class, 'inscriptionAbonnéAction'])->name('public.inscription-abonné-action');
Route::get('/connexion', [AuthController::class, 'connexion'])->name('public.connexion');
Route::post('/connexion-action', [AuthController::class, 'connexionAction'])->name('public.connexion-action');
