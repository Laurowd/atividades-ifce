@extends('layouts.app')

@section('title', 'Clientes')

@section('content')
    <h1>Lista de Clientes</h1>
    <p>Abaixo está a lista de clientes cadastrados no sistema.</p>

    @if(empty($clientes))
        <p>Nenhum cliente cadastrado no momento.</p>
    @else
        <ul>
            @foreach($clientes as $cliente)
                <li><strong>Nome:</strong> {{ $cliente['nome'] }} - <strong>Cidade:</strong> {{ $cliente['cidade'] }}</li>
            @endforeach
        </ul>
    @endif
@endsection
