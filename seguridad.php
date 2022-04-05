<?php 
ob_start();
if(($_SESSION['usuarioId'] == "") || ($_SESSION['usuarioNome'] == "") || ($_SESSION['usuarioTipo'] == "") || ($_SESSION['usuarioUS'] == "") || ($_SESSION['usuarioClave'] == "")){
    
    unset(
        $_SESSION['usuarioId'],
        $_SESSION['usuarioNome'],
        $_SESSION['usuarioTipo'],
        $_SESSION['usuarioUS'],
        $_SESSION['usuarioClave']
      );
    
    //Menssagem de erro
    $_SESSION['loginErro'] = "Area restricta para usuarios registrados";

    //Manda o usuario para a tela de login
    header("Location: login.php");
}
?>