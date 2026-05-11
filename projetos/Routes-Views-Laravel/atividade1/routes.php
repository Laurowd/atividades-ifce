<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

// Atividade 1 — Rota simples
Route::get('/ola', function () {
    return 'Olá, Laravel!';
});
