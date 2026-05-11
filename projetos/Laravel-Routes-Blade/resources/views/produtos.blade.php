@extends('layouts.app')

@section('title', 'Produtos')

@section('content')
    <h1>Produtos</h1>
    <p>Catálogo de produtos disponíveis no sistema.</p>

    @if(empty($nome) && empty($preco))
        <p>Nenhum produto selecionado. Por favor, escolha um produto na lista.</p>
    @else
        <p><strong>Produto:</strong> {{ $nome }}</p>
        @if(!empty($preco))
            <p><strong>Preço:</strong> R$ {{ number_format((float)$preco, 2, ',', '.') }}</p>
        @endif
    @endif
@endsection
