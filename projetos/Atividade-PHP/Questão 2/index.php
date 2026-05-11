<!DOCTYPE html>
<html>

<head>
    <title>Questão 2</title>
</head>

<body>
    <h1>Questão 2 - Interpolação vs. Concatenação</h1>

    <?php
    $nome = "Maria";
    ?>

    <p>Interpolação: Olá, <?php echo "$nome"; ?>! Bem-vinda!</p>
    <p>Concatenação: Olá, <?php echo $nome; ?>! Bem-vinda!</p>
    <p>Concatenação com ponto: <?php echo 'Olá, ' . $nome . '! Bem-vinda!'; ?></p>
</body>

</html>