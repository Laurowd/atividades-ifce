<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = [
            ['nome' => 'João Silva', 'cidade' => 'Boa Viagem'],
            ['nome' => 'Maria Oliveira', 'cidade' => 'Fortaleza'],
            ['nome' => 'Carlos Santos', 'cidade' => 'Quixadá'],
            ['nome' => 'Ana Costa', 'cidade' => 'Sobral']
        ];

        return view('clientes', compact('clientes'));
    }
}
