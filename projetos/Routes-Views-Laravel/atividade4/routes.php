<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

// Atividade 4 — Rota retornando View
Route::get('/sobre', function () {
    return view('sobre');
});
