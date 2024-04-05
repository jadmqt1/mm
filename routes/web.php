<?php

use App\Http\Controllers\EtablissementController;
use App\Http\Controllers\FormateurController;
use App\Http\Controllers\MetierController;
use App\Http\Controllers\PermutationController;
use App\Http\Controllers\StagiareController;
use App\Http\Controllers\VilleController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});
/* Route::resource('stagiares', StagiareController::class);
Route::get('stagiaresEdite/{id}', [StagiareController::class,"edit"]);
 */
Route::resource('formateurs', FormateurController::class)->middleware("auth");
Route::get('formateursEdite/{id}', [FormateurController::class,"edit"])->middleware("auth");
Route::post('singIn', [FormateurController::class,"singIn"]);

Route::resource('metiers', MetierController::class)->middleware("auth");
Route::get('metiersEdite/{id}', [MetierController::class,"edit"])->middleware("auth");

Route::resource('villes', VilleController::class)->middleware("auth");
Route::get('villesEdite/{id}', [VilleController::class,"edit"])->middleware("auth");

Route::resource('etablissements', EtablissementController::class)->middleware("auth");
Route::get('etablissementsEdite/{id}', [EtablissementController::class,"edit"])->middleware("auth");

Route::resource('permutations',PermutationController::class)->middleware("auth");
Route::get('permutationsEdite/{id}', [PermutationController::class,"edit"])->middleware("auth");


Route::get('valide/{id}', [PermutationController::class,"valide"]);

Route::get('/login', function () {
    return view('formateur.login');
})->name("login");


Route::get('/logout', [FormateurController::class,"logout"]);
