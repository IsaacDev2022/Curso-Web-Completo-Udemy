<?php 
    // Executando instruções SQL:
    $dsn = 'mysql:host=localhost; dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    try {
        $conexao = new PDO($dsn, $usuario, $senha);
        $query = 'CREATE TABLE tb_usuarios (
            id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            nome VARCHAR(50) NOT NULL,
            email VARCHAR(100) NOT NULL,
            senha VARCHAR(32) NOT NULL
        )';

        $conexao->exec($query);
        // Retorno = 0;

        $query = 'INSERT INTO tb_usuarios (
            nome, email, senha
        ) VALUES (
            "Jorge Sant Ana", "otarrio@gmail.com", "1234-4567"
        )';

        $retorno = $conexao->exec($query);
        echo $retorno;

    } catch (PDOException $e) {
        echo "Erro: ".$e->getCode()." Mensagem: ".$e->getMessage();
    }
?>