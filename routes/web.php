<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\WebClienteController;
use App\Http\Controllers\Web\WebHistoricoLigacaoController;
use App\Http\Controllers\Web\WebRecadoController;
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
        Route::get('/index', [WebClienteController::class, 'index'])->name('web.cliente.index');
        Route::get('/create', [WebClienteController::class, 'create'])->name('web.cliente.create');
        Route::post('/store', [WebClienteController::class, 'store'])->name('web.cliente.store');
        Route::get('/edit/{cliente}', [WebClienteController::class, 'edit'])->name('web.cliente.edit');
        Route::put('/update/{cliente}', [WebClienteController::class, 'update'])->name('web.cliente.update');
        Route::delete('/destroy/{cliente}', [WebClienteController::class, 'destroy'])->name('web.cliente.destroy');
    });

    Route::prefix('historico/ligacao')->group(function () {
        Route::post('/store', [WebHistoricoLigacaoController::class, 'store'])->name('web.historicoligacao.store');
        Route::delete('/destroy/{historicoLigacao}', [WebHistoricoLigacaoController::class, 'destroy'])->name('web.historicoligacao.destroy');
    });

    Route::prefix('recado')->group(function () {
        Route::post('/store', [WebRecadoController::class, 'store'])->name('web.recado.store');
        Route::delete('/destroy/{recado}', [WebRecadoController::class, 'destroy'])->name('web.recado.destroy');
    });
});

require __DIR__ . '/auth.php';
