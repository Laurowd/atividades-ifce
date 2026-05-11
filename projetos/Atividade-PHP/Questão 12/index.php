<!DOCTYPE html>
<html>
<head>
    <title>Questão 12</title>
</head>
<body>
    <h1>Questão 12 - Manipulação de Strings</h1>
    
    <?php
    $texto = "Programação em PHP";
    ?>
    
    <p>Original: <?php echo $texto; ?></p>
    <p>Maiúsculas: <?php echo strtoupper($texto); ?></p>
    <p>Minúsculas: <?php echo strtolower($texto); ?></p>
    <p>Tamanho: <?php echo strlen($texto); ?> caracteres</p>
    <p>Substituição: <?php echo str_replace("PHP", "Python", $texto); ?></p>
</body>
</html>