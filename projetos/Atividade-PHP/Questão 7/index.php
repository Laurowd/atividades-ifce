<!DOCTYPE html>
<html>

<head>
    <title>Questão 7</title>
</head>

<body>
    <h1>Questão 7 - Operadores Lógicos</h1>

    <?php
    $verdadeiro = true;
    $falso = false;
    ?>

    <p>E lógico (&&): <?php echo ($verdadeiro && $falso) ? 'true' : 'false'; ?></p>
    <p>OU lógico (||): <?php echo ($verdadeiro || $falso) ? 'true' : 'false'; ?></p>
    <p>Negação (!): <?php echo (!$verdadeiro) ? 'true' : 'false'; ?></p>
    <p>Expressão: <?php echo ($verdadeiro && !$falso) ? 'true' : 'false'; ?></p>
</body>

</html>