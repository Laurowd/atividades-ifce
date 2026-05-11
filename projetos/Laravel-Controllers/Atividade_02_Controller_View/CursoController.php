<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return 'Lista de cursos';
    }

    // Exercício 2 - Método Create
    public function create()
    {
        // Retorna a view 'cursos.create'
        return view('cursos.create');
    }
}
