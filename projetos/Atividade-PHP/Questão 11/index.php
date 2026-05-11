<!DOCTYPE html>
<html>

<head>
    <title>Questão 11</title>
</head>

<body>
    <h1>Questão 11 - Array Multidimensional</h1>

    <?php
    $alunos = [
        ["nome" => "João", "notas" => [8.5, 7.0, 9.0]],
        ["nome" => "Maria", "notas" => [9.5, 8.5, 10.0]],
        ["nome" => "Pedro", "notas" => [7.0, 6.5, 8.0]]
    ];
    ?>

    <p>Aluno: <?php echo $alunos[1]["nome"]; ?></p>
    <p>Segunda nota de Maria: <?php echo $alunos[1]["notas"][1]; ?></p>
    <p>Notas de Pedro: <?php echo implode(", ", $alunos[2]["notas"]); ?></p>
</body>

</html>