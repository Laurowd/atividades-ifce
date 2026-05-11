<!DOCTYPE html>
<html>
<head>
    <title>Novo Produto</title>
</head>
<body>
    <h1>Novo Produto</h1>
    <form action="/produtos" method="POST">
        @csrf
        <label>Nome:</label>
        <input type="text" name="nome">
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
