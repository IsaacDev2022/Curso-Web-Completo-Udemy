<?php         
        // Possibilitam o agrupamento de classes, interfaces, funções e constantes
        // Evitando conflitos entre os nomes
        namespace A;

        class Cliente implements \B\Cadastro {
            public $nome = "Jorge";

            public function __get($attr) {
                return $$this->$attr;
            }

            public function __construct() {
                echo "<pre>";
                print_r(get_class_methods($this));
                echo "</pre>";
            }

            public function salvar() {
                echo "Salvar";
            }

            public function remover() {
                echo "Remover";
            }
        }

        interface Cadastro {
            public function salvar();
        }

        // ======================================================================================== //

        namespace B;

        class Cliente implements Cadastro {
            public $nome = "Jamilton";

            public function __get($attr) {
                return $$this->$attr;
            }

            public function __construct() {
                echo "<pre>";
                print_r(get_class_methods($this));
                echo "</pre>";
            }

            public function remover() {
                echo "Remover";
            }
        }

        interface Cadastro {
            public function remover();
        }

        $c = new \B\Cliente();
        print_r($c);
        echo $c->__get("nome");

?>
