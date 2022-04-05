<?php
    session_start();
    include_once("../seguridad.php");
    include_once("../conexao.php");
    $Codigo    = $_POST["Codigo"];
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

    $Registro     = $_POST["Registro"];
    //echo $usuario;

    $query = mysqli_query($conn,"UPDATE cancion SET Numero='$Numero', Nombre='$Nombre', Descripcion='$Descripcion', Estado='$Estado', Registro='$Registro' WHERE Codigo='$Codigo'"); 

    if(mysqli_affected_rows($conn) !=0){
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/cancionero/listar_cancion.php'>
        <script type=\"text/javascript\">
        alert(\"Usuario editado con exito.\");
        </script>
        ";
    }else{
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/cancionero/listar_cancion.php'>
        <script type=\"text/javascript\">
        alert(\"Usuario no editado con exito.\");
        </script>
        ";
    }
?>
