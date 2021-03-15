<html>
    <head>
        <meta charset="utf-8">
        <title> Curso php </title>
    </head>
<body>
    <?php 
        // Casting: é a troca do tipo de uma variável
        // gettype() => retorna o tipo de variável.

        $valor = 10;
        $valor2 = (float) $valor; // Colocamos dentro dos parenteses o tipo que queremos fazer um casting

        echo gettype($valor);
        echo gettype($valor);
    ?>

</body>
</html>