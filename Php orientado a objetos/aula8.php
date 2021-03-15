<html>
    <head>
        <title> Aula - Pilar herança </title>
        <meta charset="utf-8">
    </head>
<body>
    <?php 
        // Beneficios:
        // Reutilizável
        // Manutenção
        class Carro extends Veiculo {
            public $teto_solar = true;

            function __construct($placa, $cor) {
                $this->placa = $placa;
                $this->cor = $cor;
            }

            function abrirTetoSolar() {
                echo "Abrir teto solar";
            }

            function alterarPosicaoVolante() {
                echo "Alterar posição do volante";
            }
        }

        class Moto extends Veiculo {
            public $contraPeso = true;

            function empinar() {
                echo "Empinar";
            }
        }

        class Veiculo {
            public $placa = null;
            public $cor = null;


            function __construct($placa, $cor) {
                $this->placa = $placa;
                $this->cor = $cor;
            }

            function acelerar() {
                echo "Acelerar";
            }

            function freiar() {
                echo "Freiar";
            }
        }

        $carro = new Carro("ABC1234", "Branco");
        $moto = new Moto("DEF1122", "Verde");

        echo "<pre>";
        print_r($carro);
        echo "</pre>";
        echo "<br>";
        echo "<pre>";
        print_r($moto);
        echo "</pre>";

        echo "<hr>";
        $carro->abrirTetoSolar();
        echo "<hr>";
        $moto->empinar();
    ?>
</body>
</html>