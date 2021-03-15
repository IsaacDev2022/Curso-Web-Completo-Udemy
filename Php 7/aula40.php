<html>
    <head>
        <meta charset="utf-8">
        <title> Curso php </title>
    </head>
<body>
    <?php 
        // Foreach: para percorrer arrays e objetos

        // Ele automaticamente reconhece o tamanho dos arrays ou objetos no qual ele está percorrendo

        $itens = array("sofá", "mesa", "cadeira", "fogão", "geladeira");

        print_r($itens);

        foreach ($itens as $item) {
            echo "$item";

            if ($item == "mesa") {
                echo " compre uma mesa e ganhe 25% de desconto com 4 cadeiras";
            }

            echo "<br>";
        }
    ?>

</body>
</html>