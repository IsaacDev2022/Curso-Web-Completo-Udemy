<?php 
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
?>