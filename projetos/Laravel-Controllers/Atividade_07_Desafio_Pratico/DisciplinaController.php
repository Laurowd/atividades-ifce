<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    public function index() {
        $disciplinas = ['Matemática', 'Português', 'História'];
        return view('disciplinas.index', compact('disciplinas'));
    }

    public function create() {
        return view('disciplinas.create');
    }

    public function store(Request $request) {
        $nome = $request->input('nome');
        return "Disciplina cadastrada: " . $nome;
    }

    public function show($id) {
        return view('disciplinas.show', ['id' => $id]);
    }
}
