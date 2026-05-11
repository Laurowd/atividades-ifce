<!DOCTYPE html>
<html>
<head>
    <title>Questão 14</title>
</head>
<body>
    <h1>Questão 14 - Variável Estática</h1>
    
    <?php
    function contador() {
        static $count = 0;
        $count++;
        echo "<p>Chamada número: $count</p>";
    }
    
    contador();
    contador();
    contador();
    contador();
    ?>
</body>
</html>