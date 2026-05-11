<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

/*
|--------------------------------------------------------------------------
| Web Routes - Atividade 6
|--------------------------------------------------------------------------
|
| Exercício 6 — Resource Controller (CRUD)
|
*/

Route::resource('alunos', AlunoController::class);
