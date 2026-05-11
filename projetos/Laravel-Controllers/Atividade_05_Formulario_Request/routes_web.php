<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

/*
|--------------------------------------------------------------------------
| Web Routes - Atividade 5
|--------------------------------------------------------------------------
|
| Exercício 5 — Formulário e Request
|
*/

Route::get('/cursos/novo', [CursoController::class, 'create']);
Route::post('/cursos', [CursoController::class, 'store']);
