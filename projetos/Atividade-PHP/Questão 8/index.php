<!DOCTYPE html>
<html>

<head>
    <title>Questão 8</title>
</head>

<body>
    <h1>Questão 8 - Constantes</h1>

    <?php
    define("PI", 3.14159);
    $raio = 5;
    $area = PI * $raio * $raio;
    ?>

    <p>Raio: <?php echo $raio; ?></p>
    <p>PI: <?php echo PI; ?></p>
    <p>Área do círculo: <?php echo $area; ?></p>
</body>

</html>