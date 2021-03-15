<html>
    <head>
        <title> Aula - Interfaces </title>
        <meta charset="utf-8">
    </head>
<body>
    <?php 
        // Definem os métodos cuja as classes precisam implementar
        /* interface EquipamentoEletronico {
            public function ligar(); // Não implementam os métodos, apenas as assinaturas
            public function desligar();
        }

        class Geladeira implements EquipamentoEletronico {
            public function abrirPorta() {
                echo "Abrir a porta";
            }

            public function ligar() {
                echo "Ligar";
            }

            public function desligar() {
                echo "Desligar";
            }
        }

        class TV implements EquipamentoEletronico {
            public function trocarCanal() {
                echo "Trocar canal";
            }

            public function ligar() {
                echo "Ligar";
            }

            public function desligar() {
                echo "Desligar";
            }
        }

        $x = new Geladeira();
        $y = new TV(); */

        // ===================================================================== //

        interface MamiferoInterface {
            public function respirar();
        }

        interface TerresteInterface {
            public function andar();
        }

        interface AquaticoInterface {
            public function nadar();
        }

        class Humano implements MamirefoInterface, TerrestreInterface {
            public function respirar() {
                echo "Respirar";
            }

            public function andar() {
                echo "Andar";
            }

            public function conversar() {
                echo "Conversar";
            }
        }

        class Baleia implements MamiferoInterface, AquaticoInterface {
            public function respirar() {
                echo "Respirar";
            }

            public function nadar() {
                echo "Nadar";
            }

            protected function esguichar() {
                echo "Esguichar";
            }
        }
    ?>
</body>
</html>