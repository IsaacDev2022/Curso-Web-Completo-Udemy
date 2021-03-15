<html>
    <head>
        <title> Aula - Pilar encapsulamento parte 1 </title>
        <meta charset="utf-8">
    </head>
<body>
    <?php 
        // Segurança
        // Encapsular o objeto a ponto de torná-lo seguro
        // Interação entra a aplicação e o objeto
        class Pai {
            private $nome = "Jorge";
            protected $sobrenome = "Silva";
            public $humor = "Feliz"; // Está disponível para ser utilizado livremente

            /* public function getSobrenome() {
                return $this->sobrenome;
            }

            public function setSobrenome($value) {
                if (strlen($value) >= 3) {
                    $this->sobrenome = $value;
                }
            } */

            // Métodos mágicos
            public function __get($attr) {
                return $this->$attr;
            }

            public function __set($attr, $value) {
                $this->$attr = $value;
            }

            private function executarMania() {
                echo "Assobiar";
            }

            private function responder() {
                echo "Oi";
            }

            public function executarAcao() { // Precisamos de um método público para fazer interface com os métodos privados e protected
                $this->executarMania();
            }
        }

        $pai = new Pai();
        echo $pai->sobrenome = "Oliveira";
        $pai->executarAcao();

    ?>
</body>
</html>