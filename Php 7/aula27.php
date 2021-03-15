<html>
    <head>
        <meta charset="utf-8">
        <title> Curso php </title>
    </head>
<body>
    <?php 
        // FUnções nativas para manipulação de strings
        /*
            strlower($texto)
            strtoupper($texto)
            ucfirst($texto)
            strlen($texto)
            str_replace(<procura por>, <substritui por>, $texto)
            substr($texto, <posicao inicial>, <qtd de caracteres>)
        */

        $texto = "Curso completo de php";

        // String to lower
        echo $texto;
        echo "<br>";
        echo strtolower($texto);
        echo "<hr>";

        // String to uper 
        echo $texto;
        echo "<br>";
        echo strtoupper($texto);
        echo "<hr>";

        // Upper cast first
        echo $texto;
        echo "<br>";
        echo ucfirst($texto);
        echo "<hr>";

        // String lenght
        echo $texto;
        echo "<br>";
        echo strlen($texto);
        echo "<hr>";

        // String replace
        echo $texto;
        echo "<br>";
        echo str_replace('PHP', 'JavaScript', $texto);
        echo "<hr>";

        // String
        echo $texto;
        echo "<br>";
        echo substr($texto, 1, 4);
        echo "<hr>";
    ?>

</body>
</html>