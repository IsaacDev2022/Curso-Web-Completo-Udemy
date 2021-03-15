<?php 
    // Manipular o retorno do fatchAll():    // fetchAll: PDOStatemet
    $dsn = 'mysql:host=localhost; dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    try {
        $conexao = new PDO($dsn, $usuario, $senha);

        $query = 'SELECT * FROM tb_usuarios';

        $stmt = $conexao->query($query);
        $lista = $stmt->fetchAll(PDO::FETCH_OBJ); 

        echo "<pre>";
        print_r($lista);
        echo "</pre>";

        echo $lista[1]->nome;

    } catch (PDOException $e) {
        echo "Erro: ".$e->getCode()." Mensagem: ".$e->getMessage();
    }
?>