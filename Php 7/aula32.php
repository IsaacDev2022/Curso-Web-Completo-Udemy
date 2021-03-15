<html>
    <head>
        <meta charset="utf-8">
        <title> Curso php </title>
    </head>
<body>
    <?php 
        // Funções para pesquisa em arrays no php

        // in_array(); // retorna true ou false para a existencia do que está sendo procurado
        // array_search(); // retorna o índice do valor pesquisado caso ele exista

        $lista_frutas = ["Banana", "Maça", "Morango", "Uva"];
        print_r($lista_frutas);
        echo "<br><hr>";

        /*
        $existe = in_array("Banana", $lista_frutas);
        // true -> texto = 1
        // false -> texto = vazio

        if ($existe) {
            echo "Sim, o valor pesquisado existe no array";
        }

        else {
            echo "Não, o valor pesquisado não existe no array";
        }

        echo "<br><hr>";

        // echo array_search("Abacate", $lista_frutas); // Caso não exista o valor no array, ele retorna null;
        $existe2 = array_search("Uva", $lista_frutas);

        if ($existe2 != null) {
            echo "Sim, o valor pesquisado existe no array, índice: ".$existe2;
        }

        else {
            echo "Não, o valor pesquisado não existe no array";
        }

        echo "<br><hr>"; */

        $lista_coisas = [
        "frutas" => $lista_frutas,
        "pessoas" => ["Maria", "João"]
    ];

        echo "<pre>";
        print_r($lista_coisas);
        echo "</pre>";
        echo "<br>";

        echo in_array("Uva", $lista_coisas["frutas"]);

    ?>

</body>
</html>