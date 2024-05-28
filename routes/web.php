<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/proses-input', [PostController::class, 'store'])->name('artikel.input');
    Route::get('/artikel', [PostController::class, 'index'])->name('artikel.show');
    Route::delete('/artikel/{id}', [PostController::class, 'destroy'])->name('artikel.destroy');
});

require __DIR__.'/auth.php';
