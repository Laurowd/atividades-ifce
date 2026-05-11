<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

// Atividade 7 — Rota com Controller (texto)
Route::get('/empresa', [PaginaController::class, 'empresa']);
