<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NotificacaoController;
use App\Http\Controllers\AmbienteController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\AlteracaoReservaController;

// Rotas de autenticação
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

// Rotas de notificações
Route::get('notificacoes', [NotificacaoController::class, 'index']);
Route::post('notificacoes', [NotificacaoController::class, 'store']);
Route::get('notificacoes/{id}', [NotificacaoController::class, 'show']);
Route::put('notificacoes/{id}', [NotificacaoController::class, 'update']);
Route::delete('notificacoes/{id}', [NotificacaoController::class, 'destroy']);

// Rotas de ambientes
Route::get('ambientes', [AmbienteController::class, 'index']);
Route::post('ambientes', [AmbienteController::class, 'store']);
Route::get('ambientes/{id}', [AmbienteController::class, 'show']);
Route::put('ambientes/{id}', [AmbienteController::class, 'update']);
Route::delete('ambientes/{id}', [AmbienteController::class, 'destroy']);

// Rotas de reservas
Route::get('reservas', [ReservaController::class, 'index']);
Route::post('reservas', [ReservaController::class, 'store']);
Route::get('reservas/{id}', [ReservaController::class, 'show']);
Route::put('reservas/{id}', [ReservaController::class, 'update']);
Route::delete('reservas/{id}', [ReservaController::class, 'destroy']);

// Rotas de alterações de reservas
Route::get('alteracoes-reservas', [AlteracaoReservaController::class, 'index']);
Route::post('alteracoes-reservas', [AlteracaoReservaController::class, 'store']);
Route::get('alteracoes-reservas/{id}', [AlteracaoReservaController::class, 'show']);
Route::put('alteracoes-reservas/{id}', [AlteracaoReservaController::class, 'update']);
Route::delete('alteracoes-reservas/{id}', [AlteracaoReservaController::class, 'destroy']);
