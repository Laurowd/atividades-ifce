<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    // Exercício 1 - Método Index
    public function index()
    {
        return 'Lista de cursos';
    }

    // Exercício 2 - Método Create
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

    // Exercício 4 - Método Show com parâmetro
    public function show($id)
    {
        // Exibir a mensagem Curso selecionado: ID X
        return "Curso selecionado: ID {$id}";
    }

    // Exercício 5 - Método Store
    public function store(Request $request)
    {
        $nome = $request->input('nome');
        return "Curso cadastrado: " . $nome;
    }
}
