<!DOCTYPE html>
<html>

<head>
    <title>Questão 6</title>
</head>

<body>
    <h1>Questão 6 - Comparações</h1>

    <?php
    $a = 10;
    $b = "10";
    ?>

    <p>Comparando <?php echo $a; ?> (int) e "<?php echo $b; ?>" (string)</p>
    <p>== (igualdade): <?php echo ($a == $b) ? 'true' : 'false'; ?></p>
    <p>=== (identidade): <?php echo ($a === $b) ? 'true' : 'false'; ?></p>
    <p>!= (diferente): <?php echo ($a != $b) ? 'true' : 'false'; ?></p>
    <p>!== (não idêntico): <?php echo ($a !== $b) ? 'true' : 'false'; ?></p>
</body>

</html>