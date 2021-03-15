<html>
    <head>
        <title> Aula - Atributos e métodos estáticos </title>
        <meta charset="utf-8">
    </head>
<body>
    <?php 
        // São atributos e métodos que podem ser acessados sem que seja necessário instanciar um objeto de uma classe
        class Exemplo {
            public static $atributo1 = "Atributo estático";
            public $atributo2 = "Atributo normal";

            public static function metodo1() {
                echo "Método estático";
            }

            public function metodo2() { 
                echo "Método normal";
            }
        }

        $x = new Exemplo();
        $x->metodo2(); // O operador seta não funcionará para acessar atributos estáticos
        echo "<br>";
        echo Exemplo::metodo1(); // Sintaxe para acessar métodos ou atributos estáticos
        echo "<br>";

        echo Exemplo::metodo12(); // Podemos acessar métodos estáticos através da sintaxe de resolução de escopo

        echo "<br>";

    ?>
</body>
</html>