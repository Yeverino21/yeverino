<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuperHeroController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\GeneralController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource('superheroes', SuperHeroController::class);

Route::resource('genders', GenderController::class);

Route::resource('universes', UniverseController::class);
require __DIR__.'/auth.php';
