<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

// Atividade 11 — Parâmetro obrigatório em rota
Route::get('/usuario/{nome}', function ($nome) {
    return 'Usuário: ' . $nome;
});
