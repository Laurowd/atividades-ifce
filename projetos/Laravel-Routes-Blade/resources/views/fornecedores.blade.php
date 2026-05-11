@extends('layouts.app')

@section('title', 'Fornecedores')

@section('content')
    <h1>Detalhes do Fornecedor</h1>
    <p>Informações detalhadas sobre o fornecedor selecionado.</p>

    <ul>
        <li><strong>Nome:</strong> {{ $fornecedor['nome'] }}</li>
        <li>
            <strong>Status:</strong> 
            @if($fornecedor['status'] == 'ativo')
                <span style="color: green;">Ativo</span>
            @else
                <span style="color: red;">Inativo</span>
            @endif
        </li>
        <li><strong>Categoria:</strong> {{ $fornecedor['categoria'] }}</li>
    </ul>
@endsection
