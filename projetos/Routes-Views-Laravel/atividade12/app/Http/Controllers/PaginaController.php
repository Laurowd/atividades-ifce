<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function produto($id)
    {
        // O parâmetro $id chega automaticamente através da rota /produto/{id}
        // O Laravel mapeia o {id} da URL para o argumento da função
        return "Produto ID: " . $id;
    }
}
