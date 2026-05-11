<!DOCTYPE html>
<html>

<head>
    <title>Questão 20</title>
</head>

<body>
    <h1>Questão 20 - Cadastro</h1>

    <?php
    $nome = "Carlos Silva";
    $email = "carlos.silva@email.com";
    $idade = 28;
    ?>

    <h2>Cadastro realizado!</h2>
    <p>Nome: <?php echo $nome; ?></p>
    <p>E-mail: <?php echo $email; ?></p>
    <p>Idade: <?php echo $idade; ?> anos</p>

    <h3>Mensagem personalizada:</h3>
    <p>
        Olá, <?php echo $nome; ?>! Seu cadastro foi realizado com sucesso.
        Enviamos um e-mail de confirmação para <?php echo $email; ?>.
        Você tem <?php echo $idade; ?> anos e agora faz parte da nossa comunidade!
    </p>
</body>

</html>