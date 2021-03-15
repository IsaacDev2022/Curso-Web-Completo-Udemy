<html>
    <head>
        <meta charset="utf-8">
        <title> Curso php </title>
    </head>
<body>
    <?php   
        // string
        $nome = "Isaac";
        // Int
        $idade = 19;
        // Float
        $peso = 60.90;
        // boolean
        $fumante = true;
    ?>

    <h1> Ficha de cadastro </h1>
    <p> Nome: <?= $nome ?> </p>
    <p> Idade: <?= $idade ?> </p>
    <p> Peso: <?= $peso ?> </p>
    <p> Fumante: <?= $fumante ?> </p>

</body>
</html>