<html>
    <head>
        <meta charset="utf-8">
        <title> Curso php </title>
    </head>
<body>
    <?php 
        $numero = 50;

        if ($numero <= 50 && $numero > 0) {
            echo "Verdadeiro";
        }

        else if ($numero != 50 || $numero < 0) {
            echo "Falso";
        }
    ?>

</body>
</html>