<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index($nome, $status, $categoria)
    {
        $fornecedor = [
            'nome' => $nome,
            'status' => $status,
            'categoria' => $categoria
        ];

        return view('fornecedores', compact('fornecedor'));
    }
}
