<?php
session_start();
$usuariot = $_POST['usuario'];
$clavet = $_POST['clave'];

include_once("conexao.php");

$result = mysqli_query($conn,"SELECT * FROM personas WHERE usuario='$usuariot' AND clave='$clavet' LIMIT 1");
$resultado = mysqli_fetch_assoc($result);
//echo "Usuario: ".$resultado['nombre'];
if(empty($resultado)){
    //Menssagem de erro
    $_SESSION['loginErro'] = "Usuario o clave invalido";

    //Manda o usuario para a tela de login

    header("Location: login.php");
}else{

    //Define os valores atribuidos na sessao do usuario
    $_SESSION['usuarioId'] = $resultado['id_persona'];
    $_SESSION['usuarioNome'] = $resultado['nombre'];
    $_SESSION['usuarioTipo'] = $resultado['tipo_persona'];
    $_SESSION['usuarioUS'] = $resultado['usuario'];
    $_SESSION['usuarioClave'] = $resultado['clave'];

    if($_SESSION['usuarioTipo'] == 'adm'){

        header("Location: administrativo.php");

    }else{
        header("Location: cliente.php");
    }
    
}
?>