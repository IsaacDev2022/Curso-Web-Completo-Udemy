<?php 
    session_start();
    // Remover índices do array de sessão.
    // unset();
    

    // Destruir a variável de sessão.
    // session_destroy();
    // Forçar um redirecionamento.

    session_destroy();
    header("Location: index.php");
?>