<!DOCTYPE html>
<html>

<head>
    <title>Questão 10</title>
</head>

<body>
    <h1>Questão 10 - Arrays Associativos</h1>

    <?php
    $pessoa = [
        "nome" => "João Silva",
        "idade" => 30,
        "cidade" => "São Paulo",
        "profissao" => "Desenvolvedor"
    ];
    ?>

    <p>Nome: <?php echo $pessoa["nome"]; ?></p>
    <p>Idade: <?php echo $pessoa["idade"]; ?></p>
    <p>Cidade: <?php echo $pessoa["cidade"]; ?></p>
    <p>Profissão: <?php echo $pessoa["profissao"]; ?></p>
</body>

</html>