<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/offers/create', function () {
    return view('/offers/create');
});

// Affichage des offres de stage
Route::get('/offers', [OfferController::class, 'index'])->name('offers.index');

// Affichage du détail d'une offre de stage
Route::get('/offers/{offer}', [OfferController::class, 'show'])->name('offers.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Éditer la page d'enregistrement d'un utilisateur pour qu'il puisse y ajouter les détails de son entreprise
Route::get('/register', [RegisteredUserController::class, 'create'])
            ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/offers/create', [OfferController::class, 'create'])->name('offers.create');
    Route::post('/offers', [OfferController::class, 'store'])->name('offers.store');
});

require __DIR__.'/auth.php';











