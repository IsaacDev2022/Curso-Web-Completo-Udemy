<html>
    <head>
        <meta charset="utf-8">
        <title> Curso php </title>
    </head>
<body>
    <?php 
        // Constantes: valores que não podem ser modificados durante a aplicação
        // define(nome, valor) entre aspas simples ou duplas
        define("BD_URL", "endereco_bd_dev");
        define("BD_USUARIO", "usuario_dev");
        define("BD_SENHA", "senha_dev");

        // Não precisa usar o $
        echo BD_URL."<br>";
        echo BD_USUARIO."<br>";
        echo BD_SENHA."<br>";
    ?>

</body>
</html>