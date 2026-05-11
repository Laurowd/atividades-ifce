<!DOCTYPE html>
<html>

<head>
    <title>Questão 15</title>
</head>

<body>
    <h1>Questão 15 - Objetos</h1>

    <?php
    class Carro
    {
        public $marca;
        public $modelo;
        public $ano;

        public function __construct($marca, $modelo, $ano)
        {
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->ano = $ano;
        }

        public function exibirInfo()
        {
            return "$this->marca $this->modelo ($this->ano)";
        }
    }

    $meuCarro = new Carro("Toyota", "Corolla", 2023);
    ?>

    <p>Carro: <?php echo $meuCarro->exibirInfo(); ?></p>
    <p>Marca: <?php echo $meuCarro->marca; ?></p>
    <p>Modelo: <?php echo $meuCarro->modelo; ?></p>
    <p>Ano: <?php echo $meuCarro->ano; ?></p>
</body>

</html>