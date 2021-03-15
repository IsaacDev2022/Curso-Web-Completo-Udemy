<html>
    <head>
        <meta charset="utf-8">
        <title> Curso php </title>
    </head>
<body>
    <?php 
        // Do-while
        $num = 0;

        do {
            if ($num % 2 == 0) {
                echo $num."<br>";
            }

            $num++;

        } while ($num <= 50);
    ?>

</body>
</html>