<html>
    <head>
        <title> Aula - Pilar polimofrismo parte 2 </title>
        <meta charset="utf-8">
    </head>
<body>
    <?php 
            class Pai {
                private $nome = "Jorge"; // Esse atributo é apenas do contexto do objeto pai, e não do filho, mesmo sendo possível referenciar através 
                // do objeto filho
                protected $sobrenome = "Silva";
                public $humor = "Feliz"; 
                // Os objetos public e protected já sim podem fazer parte do contexto do objeto filho

                public function __get($attr) {
                    return $this->$attr;
                }
    
                public function __set($attr, $value) {
                    $this->$attr = $value;
                }  
    
                private function executarMania() {
                    echo "Assobiar";
                }
    
                protected function responder() {
                    echo "Oi";
                }
    
                public function executarAcao() { 
                    $x = rand(1, 10);

                    if ($x >= 1 && $x <= 8) {
                        $this->responder();
                    }

                    else {
                        $this->executarMania();
                    }
                }
            }

            class Filho extends Pai {
                /* public function getAtributo($attr) {
                    return $this->$attr;
                }

                public function setAtributo($attr, $value) {
                    $this->$attr = $value;
                    // Ele cria um novo atributo para o contexto do objeto filho
                } */

                // São métodos análogos aos mágicos get e set, mas não são eles
                public function __construct() {
                    echo "<pre>";
                    print_r(get_class_methods($this));
                    echo "</pre>";
                }

                private function executarMania() {
                    echo "Cantar";
                }
            }

            $filho = new Filho();
            echo "<pre>";
            print_r($filho);
            echo "</pre>";
            
            // Exibir os métodos do objeto
            get_class_methods($filho); // Retorna um array com a relação de métodos internos do objeto passado por parametro
            echo "<pre>";
            print_r(get_class_methods($filho));
            echo "</pre>";

            /* echo $filho->__get("nome"); // Os métodos mágicos da classe pai rastreia e acessa o atributo do método pai
            // Mesmo que acessemos tais atributos através da classe filha
            echo "<br>";
            $filho->__set("nome", "Jamilton"); // A modificação é feita no contexto do objeto pai, não do objeto filho
            echo $filho->__get("nome"); // Mas se o get e set forem definidos no objeto filho, eles irão trabalhar apenas no contexto do objeto filho
            // Ou seja, eles dependem do contexto em que estão inseridos

            echo "<pre>";
            print_r($filho);
            echo "</pre>"; */

            $filho->executarAcao();
    ?>
</body>
</html>