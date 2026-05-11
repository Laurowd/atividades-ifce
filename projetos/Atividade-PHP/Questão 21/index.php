<!DOCTYPE html>
<html>
<head>
    <title>Agenda Estudantil</title>
</head>
<body>

    <h1>Agenda Estudantil</h1>

    <form method="POST" action="">
        <label>Seu nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Data:</label><br>
        <input type="date" name="data" required><br><br>

        <label>Compromisso:</label><br>
        <textarea name="compromisso" required></textarea><br><br>

        <button type="submit">Salvar</button>
    </form>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $data = $_POST["data"];
        $compromisso = $_POST["compromisso"];

        echo "<h2>Registro Salvo</h2>";
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>Data:</strong> $data</p>";
        echo "<p><strong>Compromisso:</strong> $compromisso</p>";
    }
    ?>

</body>
</html>
