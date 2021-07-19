<?php 
    session_start();

    // Acesso a uma relação de usuários do sistema:

    // Variável que verifica se a autenticação foi realizada:
    $usuarioAutenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;
    $perfis = array(1 => "Administrativo", 2 => 'Usuário');

    $usuarios = array(
        array('id' => 1, 'email'=> 'adm@test.com.br', 'senha' => '1234', 'perfil_id' => 1),
        array('id' => 2, 'email'=> 'user@test.com.br', 'senha' => '1234', 'perfil_id' => 1),
        array('id' => 3, 'email'=> 'jose@test.com.br', 'senha' => '1234', 'perfil_id' => 2),
        array('id' => 4, 'email'=> 'maria@test.com.br', 'senha' => '1234', 'perfil_id' => 2),
    );

    foreach($usuarios as $user) {
        $user['email'];
        $user['senha'];

        /* echo "Usuário app: " . $user['email'] . ' / ' . $user['senha'];
        echo "<br>";
        echo "Usuário form: " . $_POST['email'] . ' / ' . $_POST['password'];
        echo "<hr>"; */

        if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuarioAutenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }

    }

    if ($usuarioAutenticado) {
        echo "Usuário autenticado";
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header("Location: home.php");
    }

    else {
        $_SESSION['autenticado'] = 'NÃO';
        header('Location: index.php?login=erro');
    }
?>