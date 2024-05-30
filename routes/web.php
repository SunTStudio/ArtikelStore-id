<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Tag;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    $data = tag::all();
    return view('dashboard',compact('data'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/proses-input', [PostController::class, 'store'])->name('artikel.input');
    Route::get('/rangkuman', [PostController::class, 'index'])->name('artikel.show');
    Route::get('/edit/{id}', [PostController::class, 'edit'])->name('artikel.edit');
    Route::get('/update', [PostController::class, 'update'])->name('artikel.update');
    Route::delete('/rangkuman/{id}', [PostController::class, 'destroy'])->name('artikel.destroy');
});
    Route::get('/artikel', [PostController::class, 'artikel'])->name('artikel.card');
require __DIR__.'/auth.php';
