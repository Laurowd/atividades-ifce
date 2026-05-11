<!DOCTYPE html>
<html>
<head>
    <title>Questão 18</title>
</head>
<body>
    <h1>Questão 18 - isset() e empty()</h1>
    
    <?php
    $definida = "Texto";
    $vazia = "";
    $zero = 0;
    ?>
    
    <p>Variável "definida" = "Texto"</p>
    <p>isset(): <?php echo isset($definida) ? 'true' : 'false'; ?></p>
    <p>empty(): <?php echo empty($definida) ? 'true' : 'false'; ?></p>
    
    <p>Variável "vazia" = ""</p>
    <p>isset(): <?php echo isset($vazia) ? 'true' : 'false'; ?></p>
    <p>empty(): <?php echo empty($vazia) ? 'true' : 'false'; ?></p>
    
    <p>Variável "zero" = 0</p>
    <p>isset(): <?php echo isset($zero) ? 'true' : 'false'; ?></p>
    <p>empty(): <?php echo empty($zero) ? 'true' : 'false'; ?></p>
    
    <p>Variável não definida</p>
    <p>isset(): <?php echo isset($indefinida) ? 'true' : 'false'; ?></p>
    <p>empty(): <?php echo empty($indefinida) ? 'true' : 'false'; ?></p>
</body>
</html>
