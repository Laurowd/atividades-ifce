<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

// Atividade 8 — Rota, Controller e View
Route::get('/servicos', [PaginaController::class, 'servicos']);
