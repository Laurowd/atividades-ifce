<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

// Atividade 5 — Rota com outra View
Route::get('/contato', function () {
    return view('contato');
});
