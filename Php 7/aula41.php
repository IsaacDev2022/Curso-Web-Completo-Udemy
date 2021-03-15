<html>
    <head>
        <meta charset="utf-8">
        <title> Curso php </title>
    </head>
<body>
    <?php 
        $funcionarios = array(
            array ("Nome" => "João", "Salario" => 2500), 
            array ("Nome" => "Maria", "Salario" => 3000), 
            array ("Nome" => "Júlia", "Salario" => 2200), 
        );

        echo "<pre>";
        print_r($funcionarios);
        echo "</pre>";

        foreach($funcionarios as $idx => $funcionario) {
            
            foreach($funcionario as $idx2 => $valor) {
                echo "$idx2 - $valor <br>";
            }

            echo "<hr>";
        }
    ?>

</body>
</html>