<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NetflixController;
use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\PokemonsController;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\PersonnesController;
use App\Http\Controllers\UsagersController;
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
/*
Route::get('/', function () {
    return view('Netflix');
});
*/
Route::get('/', [NetflixController::class, 'index'])->name('netflix.index');

Route::get('/films.create', [NetflixController::class, 'create'])->name('films.create');
Route::post('/films.store', [NetflixController::class, 'store'])->name('films.store');
Route::post('/films.storeRealisateur', [NetflixController::class, 'storeRealisateur'])->name('films.storeRealisateur');
Route::get('/films/edit/{film}', [NetflixController::class, 'edit'])->name('films.edit');
Route::patch('/films/{film}/edit', [NetflixController::class, 'update'])->name('films.update');
Route::get('/films/{film}/',[NetflixController::class,'show'])->name('films.show');
Route::delete('/films/{id}', [NetflixController::class, 'destroy'])->name('films.destroy');

Route::get('administration', [AdministrationController::class, 'index'])->name('administration.index');

Route::get('pokemons', [PokemonsController::class, 'index'])->name('pokemons.index');

Route::get('/films/{film}/',[NetflixController::class,'show'])->name('films.show');



Route::get('Personnes',
[PersonnesController::class,'index'])->name('personnes.index');

Route::get('/personnes/creation',
[PersonnesController::class, 'create'])->name('personnes.create');

Route::post('/personnes',
[PersonnesController::class, 'store'])->name('personnes.store');



Route::patch('/personnes/modifier/{personne}',
[PersonnesController::class, 'update'])->name('personnes.update');

Route::get('/personnes/edit/{personne}',
[PersonnesController::class, 'edit'])->name('personnes.edit');

Route::delete('/personnes/supprimer/{personne}',
[PersonnesController::class, 'destroy'])->name('personnes.destroy');


Route::get('personne/{personne}',
[PersonnesController::class,'show'])->name('personnes.show');

Route::get('/login',
[UsagersController::class,'showLoginForm'])->name('usagers.show');


Route::post('/loginSave',
[UsagersController::class,'login'])->name('usagers.login');


Route::get('/logout',
[UsagersController::class,'logout'])->name('usagers.logout');
