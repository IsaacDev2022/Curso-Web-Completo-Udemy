<html>
    <head>
        <title> Aula - Pilar abstração </title>
        <meta charset="utf-8">
    </head>
<body>
    <?php 
        // Esse assunto já foi falado na parte de JS
        class Funcionario {
            // Atributos
            public $nome = "José";
            public $telefone = "11 9999-9999";
            public $numFilhos = 2;

            // Métodos
            public function resumirCadFunc() {
                return "$this->nome possui $this->numFilhos filho(s)"; // O this é um operador de ajuste de contexto
            }

            public function modificarNumFilhos($numFilhos) { // Contexto do método
                // Afetar um atributo do objeto
                $this->numFilhos = $numFilhos; // Contexto do objeto
            }
        }

        $f1 = new Funcionario();
        echo $f1->resumirCadFunc(); // Em php se acessa métodos e atributos através de ->
        echo "<br>";
        $f1->modificarNumFilhos(3);
        echo $f1->resumirCadFunc(); 
    ?>
</body>
</html>