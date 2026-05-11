<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

// Atividade 10 — Correção de erro proposital
Route::get('/equipe', [PaginaController::class, 'equipe']);
