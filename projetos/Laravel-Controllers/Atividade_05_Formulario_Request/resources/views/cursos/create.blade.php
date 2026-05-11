@extends('layouts.app')

@section('content')
<h1>Cadastro de Curso</h1>
<form action="/cursos" method="POST">
    @csrf
    <label for="nome">Nome do Curso:</label>
    <input type="text" name="nome" id="nome">
    <button type="submit">Cadastrar</button>
</form>
@endsection
