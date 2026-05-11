<?php

use Illuminate\Support\Facades\Route;

// Rota 1 corrigida
Route::get('/blog', function () {
    return "Blog 1"; // Mantido mas poderia ser alterado
});

// Rota 2 com URI diferente para evitar conflito
Route::get('/blog-post', function () {
    return "Blog 2";
});
