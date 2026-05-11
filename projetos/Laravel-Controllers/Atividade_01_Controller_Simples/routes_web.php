<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Exercício 1 - Criando um Controller Simples
| Objetivo: Fixar a criação e uso básico de controllers.
|
*/

// Rota /cursos apontando para o método index do CursoController
Route::get('/cursos', [CursoController::class, 'index']);
