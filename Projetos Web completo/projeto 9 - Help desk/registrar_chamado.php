<?php 
    session_start();

    // Montagem do texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = $_SESSION['id'] . " # " . $titulo . " # " . $categoria . " # " . $descricao . PHP_EOL;

    // Abrindo o arquivo
    $arquivo = fopen('arquivo.hd', 'a');

    // Escrevendo no arquivo
    fwrite($arquivo, $texto);

    // Fechando o arquivo
    fclose($arquivo);

?>