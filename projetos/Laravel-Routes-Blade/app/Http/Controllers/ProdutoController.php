<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index($nome = null, $preco = null)
    {
        return view('produtos', compact('nome', 'preco'));
    }
}
