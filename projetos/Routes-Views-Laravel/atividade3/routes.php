<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

// Atividade 3 — Sub-rota adicional
Route::get('/curso/web', function () {
    return 'Disciplina Programação Web I';
});
