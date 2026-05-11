<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    // Parâmetro $id adicionado
    public function usuario($id)
    {
        return "Usuário " . $id;
    }
}
