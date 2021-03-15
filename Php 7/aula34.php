<html>
    <head>
        <meta charset="utf-8">
        <title> Curso php </title>
    </head>
<body>
    <?php 
        // Funções nativas para manipular arrays
        /*
            is_array(array)
            array_keys(array)
            sort(array)
            asort(array)
            count(array)
            array_merge(array)
            explode(array)
            implode(array)
        */

        /* $array = array();
        $retorno = is_array($array);

        if ($retorno) {
            echo "Sim, é um array";
        }

        else {
            echo "Não, não é um array";
        } */

        /* $array = [1 => "a", 7 => "b", 18 => "c"];

        echo "<pre>";
        print_r($array);
        echo "</pre>";

        $chaves_array = array_keys($array);

        echo "<pre>";
        print_r($chaves_array);
        echo "</pre>"; */

        /* $array = array("Mouse", "Cabo hdmi", "Gabinete", "Fonte atx", "Teclado");
        echo "<pre>";
        print_r($array);
        echo "</pre>";

        sort($array); // Retorna true ou false para tentativa de ordenação do array
        echo "<pre>";
        print_r($array);
        echo "</pre>"; */

        /* $array = array("Mouse", "Cabo hdmi", "Gabinete", "Fonte atx", "Teclado");
        echo "<pre>";
        print_r($array);
        echo "</pre>";

        asort($array); // Ele preserva a relação índice valor;
        echo "<pre>";
        print_r($array); */

        /* $array = array("Mouse", "Cabo hdmi", "Gabinete", "Fonte atx", "Teclado", "Notebook");
        echo "<pre>";
        print_r($array);
        echo count($array);
        echo "</pre>"; */

        /* $array1 = ["Osx", "Windows"];
        $array2 = array("Linux");
        $array3 = ["Solaris"];

        $novo_array = array_merge($array1, $array2, $array3);
        echo "<pre>";
        print_r($novo_array);
        echo "</pre>"; */

        /* $string = "26/04/2018";
        $array_retorno = explode("/", $string);
        echo "<pre>";
        echo $string;
        print_r($array_retorno);
        echo "</pre>"; */

        $array = ["a", "b", "x", "y"]; //a, b, x, y
        $string_retorno = implode(",", $array);
        echo $string_retorno;

    ?>

</body>
</html>