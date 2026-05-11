<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return 'Lista de cursos';
    }

    public function create()
    {
        return view('cursos.create');
    }

    // Exercício 3 - Método Listagem
    public function listagem()
    {
        // Criar um array com pelo menos três cursos
        $cursos = ['Desenvolvimento Web', 'Banco de Dados', 'Estrutura de Dados'];

        // Enviar os dados para a view 'cursos.listagem'
        return view('cursos.listagem', compact('cursos'));
    }
}
