<?php
    session_start();
    include_once("../seguridad.php");
    include_once("../conexao.php");
    $Numero    = $_POST["Numero"];
    $Nombre    = $_POST["Nombre"];
    $Descripcion     = $_POST["Descripcion"];
    $Estado = '';
    if(isset($_POST ['Estado']))
    {
    $Estado = 1;
    }
    else
    {
    $Estado = 0;
    }
    //echo $usuario;

    $query = mysqli_query($conn,"INSERT INTO cancion (Numero, Nombre, Descripcion, Estado, Registro)
    VALUES ('$Numero', '$Nombre', '$Descripcion', '$Estado', '$Registro')");
    if(mysqli_affected_rows($conn) !=0){
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/cancionero/listar_cancion.php'>
        <script type=\"text/javascript\">
        alert(\"Usuario cadastrado con exito.\");
        </script>
        ";
    }else{
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/cancionero/listar_cancion.php'>
        <script type=\"text/javascript\">
        alert(\"Usuario no cadastrado con exito.\");
        </script>
        ";
    }
?>
