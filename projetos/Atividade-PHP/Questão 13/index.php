<!DOCTYPE html>
<html>

<head>
    <title>Questão 13</title>
</head>

<body>
    <h1>Questão 13 - Escopo de Variáveis</h1>

    <?php
    $global = "Variável global";

    function testeEscopo()
    {
        $local = "Variável local";
        global $global;

        echo "<p>Dentro da função:</p>";
        echo "<p>Local: $local</p>";
        echo "<p>Global: $global</p>";
    }

    testeEscopo();
    ?>

    <p>Fora da função:</p>
    <p>Global: <?php echo $global; ?></p>
</body>

</html>