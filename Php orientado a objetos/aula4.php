<html>
    <head>
        <title> Aula - Métodos getters e setters </title>
        <meta charset="utf-8">
    </head>
<body>
    <?php 
        // Métodos getters e setters:
        // Métodos que nos permitem a atender a uma convenção, a melhor forma de acessar os atributos 

        class Funcionario {
            // Atributos
            public $nome = null;
            public $telefone = null;
            public $numFilhos = null;

            // Getters e setters
            public function setNome($nome) {
                $this->nome = $nome;
            }

            public function setTelefone($telefone) {
                $this->telefone = $telefone;
            }

            public function setNumFilhos($numFilhos) {
                $this->numFilhos = $numFilhos;
            }

            public function getNome() {
                return $this->nome;
            }

            public function getTelefone() {
                return $this->telefone;
            }

            public function getNumFilhos() {
                return $this->numFilhos;
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
        $f1->setNome("Adão");
        $f1->setNumFilhos(4);
        $f1->setTelefone("61 9999-9999");
        echo $f1->resumirCadFunc();
    ?>
</body>
</html>