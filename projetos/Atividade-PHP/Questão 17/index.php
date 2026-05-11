<!DOCTYPE html>
<html>
<head>
    <title>Questão 17</title>
</head>
<body>
    <h1>Questão 17 - Conversão Explícita</h1>
    
    <?php
    $bool = true;
    ?>
    
    <p>Booleano: <?php echo $bool ? 'true' : 'false'; ?></p>
    <p>Para int: <?php echo (int)$bool; ?></p>
    <p>Para string: "<?php echo (string)$bool; ?>"</p>
    <p>Para float: <?php echo (float)$bool; ?></p>
</body>
</html>
