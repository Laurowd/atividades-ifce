<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

/*
|--------------------------------------------------------------------------
| Web Routes - Atividade 2
|--------------------------------------------------------------------------
|
| Exercício 2 — Controller Retornando View
|
*/

Route::get('/cursos', [CursoController::class, 'index']);

// Rota /cursos/novo apontando para o método create
Route::get('/cursos/novo', [CursoController::class, 'create']);
