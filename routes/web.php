<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllergeenController;
use App\Http\Controllers\MagazijnController;
use App\Http\Controllers\LeverancierController;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/Allergenen', [AllergeenController::class, 'index'])->name('Allergenen.index');

Route::get('/Allergenen/create', [AllergeenController::class, 'create'])->name('Allergenen.create');

Route::post('Allergenen', [AllergeenController::class, 'store'])->name('Allergenen.store');

Route::delete('Allergenen/{id}', [AllergeenController::class, 'destroy'])->name('Allergenen.destroy');

Route::get('Allergenen/{id}/edit', [AllergeenController::class, 'edit'])->name('Allergenen.edit');

Route::put('Allergenen/{id}', [AllergeenController::class, 'update'])->name('Allergenen.update');

Route::get('Allergenen/{id}', [AllergeenController::class, 'show'])->name('Allergenen.show');

Route::get('/Magazijn', [MagazijnController::class, 'index'])->name('Magazijn.index');

Route::get('Magazijn/{id}/AllergeenInfo', [MagazijnController::class, 'AllergeenInfo'])->name('Magazijn.AllergeenInfo');

Route::get('Magazijn/{id}/LeverantieInfo', [MagazijnController::class, 'LeverantieInfo'])->name('Magazijn.LeverantieInfo');

Route::get('/Leverancier', [LeverancierController::class, 'index'])->name('Leverancier.index');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
