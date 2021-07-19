<html>
    <head>
        <meta charset="utf-8">
        <title> Curso php </title>
    </head>
<body>
    <?php 
        // Funções matemáticas:
        /*
            ceil($numero)
            floor($numero)
            round($numero)
            rand()
            sqrt($numero)
        */
        $num = 7.3; // OBS: para valores negativos, o arredondamento é para cima, ou seja, um numero a menos que ele

        echo ceil($num); // Arredonda para cima
        echo "<br>";
        echo floor($num); // Arredonda para baixo
        echo "<br>";
        echo round($num); // Arredonda com base na fração 
        // Fração .0 e .4 => para baixo / .5 => para cima
        echo "<br>";
        echo rand(10, 100); // Gerar um valor aleatório de 0 até randmax
        echo "<br>".getrandmax();
        echo "<br>";
        echo sqrt(25); // Retorna a raiz quadrada de um número
    ?>

</body>
</html>