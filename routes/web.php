<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ProduitController;

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
//     return view('welcome');
// });
Route::get('/', [ProduitController::class, 'produit'])->name('produit');
Route::post('/enregistre_produit', [ProduitController::class, 'enregistre_produit'])->name('enregistre_produit');
Route::get('/liste_produit', [ProduitController::class, 'liste_produit'])->name('liste_produit');
Route::get('/mod_produit/{id}', [ProduitController::class, 'mod_produit'])->name('mod_produit');
Route::put('/update_produit/{id}', [ProduitController::class, 'update_produit'])->name('update_produit');
Route::delete('/delete_produit/{id}', [ProduitController::class, 'delete_produit'])->name('delete_produit');