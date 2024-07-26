<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\ClienteControllerWeb;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('cliente')->group(function () {
        Route::get('/index', [ClienteControllerWeb::class, 'index'])->name('web.cliente.index');
        Route::get('/create', [ClienteControllerWeb::class, 'create'])->name('web.cliente.create');
        Route::post('/store', [ClienteControllerWeb::class, 'store'])->name('web.cliente.store');
        Route::get('/edit/{cliente}', [ClienteControllerWeb::class, 'edit'])->name('web.cliente.edit');
    });
});

require __DIR__.'/auth.php';
