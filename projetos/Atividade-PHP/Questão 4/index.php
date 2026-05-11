<!DOCTYPE html>
<html>

<head>
    <title>Questão 4</title>
</head>

<body>
    <h1>Questão 4 - Conversão de Tipos</h1>

    <?php
    $stringNum = "123.45";
    $paraInt = (int) $stringNum;
    $paraFloat = (float) $stringNum;
    $paraBool = (bool) $stringNum;
    ?>

    <p>String original: <?php echo $stringNum; ?></p>
    <p>Para int: <?php echo $paraInt; ?></p>
    <p>Para float: <?php echo $paraFloat; ?></p>
    <p>Para bool: <?php echo $paraBool ? 'true' : 'false'; ?></p>
</body>

</html>