<html>
    <head>
        <meta charset="utf-8">
        <title> Curso php </title>
    </head>
<body>
    <?php 
        // false (true/false) - tipo variável boolean
        // null e empty - valore especiais
        // O empty se aplica aos dois casos

        $funcionario1 = null;
        $funcionario2 = "";
        $funcionario3 = false;

        // Valores null
        if (is_null($funcionario1)) {
            echo "Sim, a variável é null";
        }

        else {
            echo "Não, a variável não é null";
        }

        echo "<hr>";

        if (is_null($funcionario2)) {
            echo "Sim, a variável é null";
        }

        else {
            echo "Não, a variável não é null";
        }

        echo "<br><hr>";

        // Valores vazios
        if (empty($funcionario1)) {
            echo "Sim, a variável está vazia";
        }

        else {
            echo "Não, a variável não está vazia";
        }

        echo "<hr>";

        if (empty($funcionario2)) {
            echo "Sim, a variável está vazia";
        }

        else {
            echo "Não, a variável não está vazia";
        }

        echo "<hr>";

        // Variáveis falsas

        if (empty($funcionario3)) {
            echo "Sim, a variável está vazia";
        }

        else {
            echo "Não, a variável não está vazia";
        }
    ?>

</body>
</html>