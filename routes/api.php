<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ClienteController;
use App\Http\Controllers\Api\HistoricoLigacaoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [AuthController::class, 'auth']);
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('cliente')->group(function () {
        Route::get('/index', [ClienteController::class, 'index'])->name('clientes.index');
        Route::post('/store', [ClienteController::class, 'store'])->name('clientes.store');
    });

    Route::prefix('historico/ligacao')->group(function () {
        Route::post('/store', [HistoricoLigacaoController::class, 'store'])->name('historico.ligacao.store');
    });
});
