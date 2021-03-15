<html>
    <head>
        <title> Aula - Pilar polimorfismo </title>
        <meta charset="utf-8">
    </head>
<body>
    <?php 
        // Sobrescrita de métodos
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

            function trocarMarcha() {
                echo "Desengatar empreagem com o mão e engatar marcha com o pé";
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

            function trocarMarcha() {
                echo "Desengatar empreagem com o pé e engatar marcha com a mão";
            }
        }

        class Caminhao extends Veiculo {

        }

        $carro = new Carro("ABC1234", "Branco");
        $moto = new Moto("DEF1122", "Verde");
        $caminhao = new Caminhao("FGH3344", "Preto");

        $carro->trocarMarcha();
        echo "<br>";
        $moto->trocarMarcha();
        $caminhao->trocarMarcha();

    ?>
</body>
</html>