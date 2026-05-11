<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

/*
|--------------------------------------------------------------------------
| Web Routes - Atividade 4
|--------------------------------------------------------------------------
|
| Exercício 4 — Controller com Parâmetro
|
*/

Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/cursos/novo', [CursoController::class, 'create']);
Route::get('/cursos/lista', [CursoController::class, 'listagem']);

// Rota com parâmetro ID
Route::get('/cursos/{id}', [CursoController::class, 'show']);
