<?php

use Illuminate\Support\Facades\Route;
// Importação adicionada para corrigir o erro
use App\Http\Controllers\PaginaController;

Route::get('/contato', [PaginaController::class, 'contato']);
