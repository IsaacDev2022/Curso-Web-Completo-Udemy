<html>
    <head>
        <meta charset="utf-8">
        <title> Curso php </title>
    </head>
<body>
<?php 
        $usuario_possui_cartao_loja = true;
        $valor_compra = 200;
        $valor_frete = 50;
        $recebeu_desconto_frete = false;

        if ($usuario_possui_cartao_loja == true && $valor_compra >= 400) {
            $valor_frete = 0;
            $recebeu_desconto_frete = true;
        }

        else if ($usuario_possui_cartao_loja == true && $valor_compra <= 300) {
            $valor_frete = 10;
            $recebeu_desconto_frete = true;
        }

        else if ($usuario_possui_cartao_loja == true && $valor_compra <= 100) {
            $valor_frete = 25;
            $recebeu_desconto_frete = true;
        }
    ?>

        <h1> Detalhes do pedido </h1> 
        <p> Possui cartão da loja? <?= $usuario_possui_cartao_loja ? "Sim" : "Não" ?>
            <?php 
            // Sintaxe dos operadores ternários:
            // <condição> ? true : false
                /* if ($usuario_possui_cartao_loja == true) {
                    echo "Sim";
                }

                else {
                    echo "Não";
                } */
            ?>     
        </p>

        <p> Valor da compra: <?= $valor_compra ?> </p>

        <p> Recebeu o desconto do frete?
            <?php 
                if ($recebeu_desconto_frete == true) {
                    echo "Sim";
                }

                else {
                    echo "Não";
                }
            ?>     
        </p>

        <p> Valor do frete: <?= $valor_frete ?> </p>

</body>
</html>