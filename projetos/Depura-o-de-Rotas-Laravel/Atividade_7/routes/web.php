<?php

use Illuminate\Support\Facades\Route;

// Rota específica vem PRIMEIRO
Route::get('/produto/novo', function () {
    return "Novo Produto";
});

// Rota genérica vem DEPOIS
Route::get('/produto/{id}', function ($id) {
    return "Produto $id";
});
