<html>
    <head>
        <meta charset="utf-8">
        <title> Curso php </title>
    </head>
<body>
    <?php 
        $registros = array(
            array ("titulo" => "Titulo noticia 1", "Conteudo" => "Conteúdo noticia 1"), 
            array ("titulo" => "Titulo noticia 2", "Conteudo" => "Conteúdo noticia 2"), 
            array ("titulo" => "Titulo noticia 3", "Conteudo" => "Conteúdo noticia 3"), 
            array ("titulo" => "Titulo noticia 4", "Conteudo" => "Conteúdo noticia 4"), 
        );
        $idx = 0;

        while ($idx < count($registros)) {
            echo "<h3>".$registros[$idx]["titulo"]."</h3>";
            echo "<p>".$registros[$idx]["Conteudo"]."</p>";
            echo "<hr>";
            $idx++;
        } 

    ?>

</body>
</html>