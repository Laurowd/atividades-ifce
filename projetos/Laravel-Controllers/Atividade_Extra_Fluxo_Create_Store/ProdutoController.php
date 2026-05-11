<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        $nome = $request->input('nome');
        // Exibição do nome enviado após o POST
        return "Produto cadastrado: " . $nome;
    }
}
