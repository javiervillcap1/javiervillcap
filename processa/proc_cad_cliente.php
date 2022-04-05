<?php
    session_start();
    include_once("../conexao.php");
    $tipo_persona    = $_POST["tipo_persona"];
    $nombre     = $_POST["nombre"];
    $ci         = $_POST["ci"];
    $telefono   = $_POST["telefono"];
    $correo     = $_POST["correo"];
    $direccion  = $_POST["direccion"];
    $usuario    = $_POST["usuario"];
    $clave      = $_POST["clave"];
    //echo $usuario;

    $query = mysqli_query($conn,"INSERT INTO personas (tipo_persona, nombre, ci, telefono, correo, direccion, usuario, clave) 
    VALUES ('$tipo_persona', '$nombre', '$ci', '$telefono', '$correo', '$direccion', '$usuario', '$clave')");
    if(mysqli_affected_rows($conn) !=0){
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/casasnocturnas/'>
        <script type=\"text/javascript\">
        alert(\"Cliente cadastrado con exito.\");
        </script>
        ";
    }else{
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/casasnocturnas/'>
        <script type=\"text/javascript\">
        alert(\"Cliente no cadastrado con exito.\");
        </script>
        ";
    }
?>
