<html>
    <head>
        <title> Aula - Getters e setters mágicos </title>
        <meta charset="utf-8">
    </head>
<body>
    <?php 
        // Overloading  / sobrecarga de atributos e métodos        
        class Funcionario {
            // Atributos
            public $nome = null;
            public $telefone = null;
            public $numFilhos = null;
            public $salario = null;
            public $cargo = null;

            function __set($atributo, $valor) {
                $this->$atributo = $valor;
            }

            function __get($atributo) {
                return $this->$atributo;
            }

            // Métodos
            public function resumirCadFunc() {
                return "$this->nome possui $this->numFilhos filho(s)";
            }

            public function modificarNumFilhos($numFilhos) { 
                $this->numFilhos = $numFilhos;
            }
        }

        $f1 = new Funcionario();
        $f1->__set("nome", "João");
        $f1->__set("numFilhos", 3);
        echo $f1->resumirCadFunc();
    ?>
</body>
</html>