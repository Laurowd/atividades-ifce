<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

// Atividade 2 — Sub-rota simples
Route::get('/curso/ads', function () {
    return 'Curso de Análise e Desenvolvimento de Sistemas';
});
