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

    public function listagem()
    {
        $cursos = ['Desenvolvimento Web', 'Banco de Dados', 'Estrutura de Dados'];
        return view('cursos.listagem', compact('cursos'));
    }

    // Exercício 4 - Método Show com parâmetro
    public function show($id)
    {
        // Exibir a mensagem Curso selecionado: ID X
        return "Curso selecionado: ID {$id}";
    }
}
