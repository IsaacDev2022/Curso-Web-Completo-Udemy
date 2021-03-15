<html>
    <head>
        <meta charset="utf-8">
        <title> Curso php </title>
    </head>
<body>
    <?php 
    // VOID: sem retorno
        function exibirBoasVindas() {
            echo "Bem vindo ao curso PHP";
        }

        exibirBoasVindas();

    // Return: com retorno
        function calcualrAreaTerreno($largura, $comprimento) {
            $area = $largura * $comprimento;

            return $area;
        }

        echo "<br>";

        echo "Calculo da área: ".calcualrAreaTerreno(10, 60);
    ?>

</body>
</html>