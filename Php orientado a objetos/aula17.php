<html>
    <head>
        <title> Aula - Tratamento de erros - exceções customizadas </title>
        <meta charset="utf-8">
    </head>
<body>
    <?php 
        class MyException extends Exception {
            private $erro = "";

            public function __construct($erro) {
                $this->erro = $erro;
            }

            public function exibirMensagemErro() {
                echo "<div style='border: solid 1px #000; background-color: red; color: white;'>";
                echo $this->erro;
                echo "</div>";
            }
        }

        try {

            throw new MyException("Esse é um erro de teste");

        } catch (MyException $e) {
            $e->exibirMensagemErro();
        }
    ?>
</body>
</html>