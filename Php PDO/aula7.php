<?php 
    // Retornando apenas um registro com o fatch.
    $dsn = 'mysql:host=localhost; dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    try {
        $conexao = new PDO($dsn, $usuario, $senha);

        $query = 'SELECT * FROM tb_usuarios WHERE id = 1';

        $stmt = $conexao->query($query);
        $lista = $stmt->fetch(PDO::FETCH_OBJ); // Retorna apenas um registro, diferentemene do fetchAll();

        echo "<pre>";
        print_r($lista);
        echo "</pre>";

    } catch (PDOException $e) {
        echo "Erro: ".$e->getCode()." Mensagem: ".$e->getMessage();
    }
?>