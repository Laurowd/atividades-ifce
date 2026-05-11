<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

// Atividade 12 — Parâmetro em rota com Controller
Route::get('/produto/{id}', [PaginaController::class, 'produto']);
