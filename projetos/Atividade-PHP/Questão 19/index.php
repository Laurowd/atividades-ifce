<!DOCTYPE html>
<html>
<head>
    <title>Questão 19</title>
</head>
<body>
    <h1>Questão 19 - Comparações Numéricas</h1>
    
    <?php
    $n1 = 10;
    $n2 = 5;
    ?>
    
    <p>Números: <?php echo $n1; ?> e <?php echo $n2; ?></p>
    <p><?php echo $n1; ?> > <?php echo $n2; ?>: <?php echo ($n1 > $n2) ? 'true' : 'false'; ?></p>
    <p><?php echo $n1; ?> < <?php echo $n2; ?>: <?php echo ($n1 < $n2) ? 'true' : 'false'; ?></p>
    <p><?php echo $n1; ?> >= <?php echo $n2; ?>: <?php echo ($n1 >= $n2) ? 'true' : 'false'; ?></p>
    <p><?php echo $n1; ?> <= <?php echo $n2; ?>: <?php echo ($n1 <= $n2) ? 'true' : 'false'; ?></p>
    <p><?php echo $n1; ?> % <?php echo $n2; ?> = <?php echo $n1 % $n2; ?></p>
</body>
</html>