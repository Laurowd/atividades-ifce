<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

Route::get('/sobre', [PaginaController::class, 'sobre']);
