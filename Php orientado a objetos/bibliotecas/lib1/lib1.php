<?php 
            namespace A;

            class Cliente implements Cadastro {
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
            }
    
            interface Cadastro {
                public function salvar();
            }
?>