<html>
    <head>
        <title> Aula - Método construtor e destrutor (Construct e Destruct) </title>
        <meta charset="utf-8">
    </head>
<body>
    <?php 
       // Também são conhecidos como métodos mágicos
       // Fazem parte do ciclo de vida do objeto 
       
        class Pessoa {
           public $nome = null;

            function __construct($nome) {
                echo "Objeto iniciado";
                $this->nome = $nome;
            }   
            
            function __destruct() {
                echo "Objeto removido";
            }

            function __get($atributo) {
                return $this->$atributo;
            }

            function correr() {
                return $this->__get('nome')." está correndo";
            }
        }

       $pessoa = new Pessoa("Jorge");
       echo "<br> Nome: ".$pessoa->__get('nome');
       echo "<br>".$pessoa->correr();

       echo "<br>";
       // unset($pessoa); // proposital
       // Após a interpretação do script, o php vai remover o objeto automaticamente, executando o método destruct

    ?>
</body>
</html>