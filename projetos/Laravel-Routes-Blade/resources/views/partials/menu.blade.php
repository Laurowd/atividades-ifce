<nav>
    <a href="{{ route('principal') }}">Home</a>
    <a href="{{ route('sobre') }}">Sobre</a>
    <a href="{{ route('contato') }}">Contato</a>
    <a href="{{ route('login') }}">Login</a>
    <a href="{{ route('app.clientes') }}">Clientes</a>
    <a href="{{ route('app.fornecedores', ['nome' => 'EmpresaX', 'status' => 'ativo', 'categoria' => 'nacional']) }}">Fornecedores</a>
    <a href="{{ route('app.produtos') }}">Produtos</a>
</nav>
