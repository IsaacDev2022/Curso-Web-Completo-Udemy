<html>
    <head>
        <meta charset="utf-8">
        <title> Curso php </title>
    </head>
<body>
    <?php 
        $nome = "Isaac";
        $idade = 20;
        $curte = "Carros";
        // Operador de concatenação .
        echo 'Iae '.$nome.', blz? show de bola menor?, fiquei sabendo que tu tem '.$idade.' anos e que tu curte '.$curte;

        echo "<br><hr>";
        // Aspas duplas
        echo "Iae $nome blz? show de bola menor?, fiquei sabendo que tu tem $idade anos e que tu curte $curte";
        // Quando a impressão está em aspas duplas, o php faz a leitura das variáveis dentro da string e 
        // concatenca com o resto dos caracteres contito na mensagem
    ?>

</body>
</html>