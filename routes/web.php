<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index']);

Route::get('post/{state}', [WelcomeController::class, 'state'])->name('posts.states');

Route::get('post/place/{place}', [WelcomeController::class, 'place'])->name('posts.places');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
