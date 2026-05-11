<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

Route::get('/usuario/{id}', [PaginaController::class, 'usuario']);
