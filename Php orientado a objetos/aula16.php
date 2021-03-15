<html>
    <head>
        <title> Aula - Tratamento de error - try, catch, finally e throw </title>
        <meta charset="utf-8">
    </head>
<body>
    <?php 
        // Tratamento de erros com try, catch, finally e throw

        // Tenha uma lógica
        try {
            // Tenha uma lógica onde possa ocorrer um potencial erro (exceção)
            echo "<h3> *** Try *** </h3>";
            // $sql = "SELECT * FROM clientes";
            // mysql_query($sql);

            if (!file_exists("require_arquivo_a.php")) {
                throw new Exception("O arquivo não existe");
            }

        } catch (Error $e) {
            echo "<h3> *** Catch *** </h3>";
        } catch (Exception $e) {
            
        } finally {
            echo "<h3> *** Finally *** </h3>";
        }


    ?>
</body>
</html>