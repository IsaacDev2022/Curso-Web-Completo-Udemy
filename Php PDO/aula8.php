<?php 
    // Percorrendo registros com foreach():
        $dsn = 'mysql:host=localhost; dbname=php_com_pdo';
        $usuario = 'root';
        $senha = '';
    
        try {
            $conexao = new PDO($dsn, $usuario, $senha);
    
            $query = 'SELECT * FROM tb_usuarios';

            foreach ($conexao->query($query) as $key => $value) {
                echo $value['nome'];
                echo "<hr>";
            }
    
            $stmt = $conexao->query($query);
            /* $listaUsuarios = $stmt->fetchAll(PDO::FETCH_OBJ); 

             foreach($listaUsuarios as $key => $value) {
                echo $value['nome'];
                echo "<hr>";
            } */

        } catch (PDOException $e) {
            echo "Erro: ".$e->getCode()." Mensagem: ".$e->getMessage();
        }
?>