<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function sobre()
    {
        // Alterado para refletir o caminho correto: paginas/sobre.blade.php
        return view('paginas.sobre');
    }
}
