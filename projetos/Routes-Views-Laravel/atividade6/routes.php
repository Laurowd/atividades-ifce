<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

// Atividade 6 — Sub-rota com View
Route::get('/institucional/missao', function () {
    return view('missao');
});
