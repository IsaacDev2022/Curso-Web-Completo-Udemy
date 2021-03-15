<html>
    <head>
        <meta charset="utf-8">
        <title> Curso php </title>
    </head>
<body>
    <?php 
        // Servem para encapsular um bloco de códigos para realizar uma tarefa específica.
        function exibirBoasVindas() {
            echo "Bem vindo ao curso PHP";
        }

        function calcualrAreaTerreno($largura, $comprimento) {
            $area = $largura * $comprimento;

            return $area;
        }
    ?>

</body>
</html>