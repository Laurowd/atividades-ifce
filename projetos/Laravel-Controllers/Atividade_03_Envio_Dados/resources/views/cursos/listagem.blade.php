<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Cursos</title>
</head>
<body>
    <h1>Cursos Disponíveis</h1>
    <ul>
        <!-- Exibir os cursos com @foreach -->
        @foreach ($cursos as $curso)
            <li>{{ $curso }}</li>
        @endforeach
    </ul>
</body>
</html>
