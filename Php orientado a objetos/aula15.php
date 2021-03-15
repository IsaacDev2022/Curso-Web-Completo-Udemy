<html>
    <head>
        <title> Aula - Namespaces parte 2 </title>
        <meta charset="utf-8">
    </head>
<body>
    <?php 
        require "./bibliotecas/lib1/lib1.php";
        require "./bibliotecas/lib2/lib2.php";

        use A\Cliente as C1; // Apelidos para namespaces 
        use B\Cliente as C2;

        $c1 = new C1();
        $c2 = new C2();

        print_r($c);
        echo $c->__get("nome");
    ?>
</body>
</html>