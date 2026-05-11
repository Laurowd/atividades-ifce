<!DOCTYPE html>
<html>

<head>
    <title>Questão 9</title>
</head>

<body>
    <h1>Questão 9 - Arrays Indexados</h1>

    <?php
    $nomes = ["João", "Maria", "Pedro", "Ana", "Carlos"];
    ?>

    <p>Todos os nomes: <?php echo implode(", ", $nomes); ?></p>
    <p>Primeiro nome: <?php echo $nomes[0]; ?></p>
    <p>Terceiro nome: <?php echo $nomes[2]; ?></p>
    <p>Último nome: <?php echo $nomes[4]; ?></p>
</body>

</html>