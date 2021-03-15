<html>
    <head>
        <meta charset="utf-8">
        <title> Curso php </title>
    </head>
<body>
    <?php 
        // Sequenciais (numericos):
        // $lista_frutas = array("Banana", "Maça", "Morango", "Uva");
        echo "Array sequencial: <br>";
        $lista_frutas = ["Banana", "Maça", "Morango", "Uva", "Abacate"];

        $lista_frutas[] = "Abacaxi"; // O php vai gerar dinamicamente um novo índice

        // Funções para debug
        echo "<pre>";
        var_dump($lista_frutas);
        echo "</pre>";
        echo "<hr>";
        echo "<pre>";
        print_r($lista_frutas);
        echo "</pre>";

        echo "<hr>";

        echo $lista_frutas[2];
        echo "<hr>";
        echo "<br>";

        // Associativos:
        // Os indices serão definicos;
        echo "Array associativo: <br>";
        $lista_frutas2 = array("a" => "Banana", 
        "b" => "Maça", 
        "x" => "Morango", 
        "y" => "Uva",
        "z" => "Abacate");

        echo "<pre>";
        var_dump($lista_frutas2);
        echo "</pre>";

        echo $lista_frutas2["x"];

    ?>

</body>
</html>