<?php 
    // Criando conexão com banco de dados através do PDO:
    $dsn = 'mysql:host=localhost; dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';
    $conexao = new PDO($dsn, $usuario, $senha);
?>