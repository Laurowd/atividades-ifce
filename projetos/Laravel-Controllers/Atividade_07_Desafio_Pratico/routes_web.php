<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisciplinaController;

/*
|--------------------------------------------------------------------------
| Web Routes - Atividade 7 (Desafio)
|--------------------------------------------------------------------------
|
| Exercício 7 — Desafio Prático
|
*/

Route::get('/disciplinas', [DisciplinaController::class, 'index']);
Route::get('/disciplinas/novo', [DisciplinaController::class, 'create']);
Route::post('/disciplinas', [DisciplinaController::class, 'store']);
Route::get('/disciplinas/{id}', [DisciplinaController::class, 'show']);
