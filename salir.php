<?php 
session_start();
session_destroy();

//Remover todas as informacoes contidas nas variaveis globais

unset(
    $_SESSION['usuarioId'],
    $_SESSION['usuarioNome'],
    $_SESSION['usuarioTipo'],
    $_SESSION['usuarioUS'],
    $_SESSION['usuarioClave']
  );

  //Redirecionar o usuario para a pagina de login

  header("Location: login.php");
?>