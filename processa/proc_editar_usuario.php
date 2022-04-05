<?php
    session_start();
    include_once("../seguridad.php");
    include_once("../conexao.php");
    $id              = $_POST["id"];
    $tipo_persona    = $_POST["tipo_persona"];
    $nombre          = $_POST["nombre"];
    $ci              = $_POST["ci"];
    $telefono        = $_POST["telefono"];
    $correo          = $_POST["correo"];
    $direccion       = $_POST["direccion"];
    $usuario         = $_POST["usuario"];
    $clave           = $_POST["clave"];
    //echo $usuario;

    $query = mysqli_query($conn,"UPDATE personas SET tipo_persona='$tipo_persona', nombre='$nombre', ci='$ci', telefono='$telefono', correo='$correo', direccion='$direccion', usuario='$usuario', clave='$clave' WHERE id_persona='$id'"); 

    if(mysqli_affected_rows($conn) !=0){
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/casasnocturnas/listar_usuario.php'>
        <script type=\"text/javascript\">
        alert(\"Usuario editado con exito.\");
        </script>
        ";
    }else{
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/casasnocturnas/listar_usuario.php'>
        <script type=\"text/javascript\">
        alert(\"Usuario no editado con exito.\");
        </script>
        ";
    }
?>