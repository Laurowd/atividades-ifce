<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

/*
|--------------------------------------------------------------------------
| Web Routes - Atividade 3
|--------------------------------------------------------------------------
|
| Exercício 3 — Envio de Dados para a View
|
*/

Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/cursos/novo', [CursoController::class, 'create']);

// Rota para o método listagem
Route::get('/cursos/lista', [CursoController::class, 'listagem']);
