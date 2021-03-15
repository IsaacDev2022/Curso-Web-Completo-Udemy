<?php 
    // fetchAll: PDOStatemet
    $dsn = 'mysql:host=localhost; dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    try {
        $conexao = new PDO($dsn, $usuario, $senha);
        /* $query = 'INSERT INTO tb_usuarios (
            nome, email, senha
        ) VALUES (
            "João Anta", "john@gmail.com", "1234-4567"
        )';

        $conexao->exec($query);

        $query = 'INSERT INTO tb_usuarios (
            nome, email, senha
        ) VALUES (
            "João Anta", "john@gmail.com", "1234-4567"
        )';

        $query = 'INSERT INTO tb_usuarios (
            nome, email, senha
        ) VALUES (
            "Pedro Caralho", "carraai@gmail.com", "1234-4567"
        )'; */

        $query = 'SELECT * FROM tb_usuarios';

        $stmt = $conexao->query($query);
        $lista = $stmt->fetchAll(); // Retorna um array de registros do banco de dados.
        // Modos de retorno:
        // Ìndices associativos: nomes das colunas da tabela.
        // Ìndices numéricos: índices iguais aos de um array.

        echo "<pre>";
        print_r($lista);
        echo "</pre>";

    } catch (PDOException $e) {
        echo "Erro: ".$e->getCode()." Mensagem: ".$e->getMessage();
    }
?>  