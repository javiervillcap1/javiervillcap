<?php
    session_start();
    include_once("../seguridad.php");
    include_once("../conexao.php");
    $id                  = $_POST["id"];
    $nombre              = $_POST["nombre"];
    $nacionalidad        = $_POST["nacionalidad"];
    $edad                = $_POST["edad"];
    $descripcion         = $_POST["descripcion"];
    //echo $usuario;

    $query = mysqli_query($conn,"UPDATE damas SET nombre='$nombre', nacionalidad='$nacionalidad', edad='$edad', descripcion='$descripcion' WHERE id_dama='$id'"); 

    if(mysqli_affected_rows($conn) !=0){
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/casasnocturnas/listar_dama.php'>
        <script type=\"text/javascript\">
        alert(\"Dama editado con exito.\");
        </script>
        ";
    }else{
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/casasnocturnas/listar_dama.php'>
        <script type=\"text/javascript\">
        alert(\"Dama no editado con exito.\");
        </script>
        ";
    }
?>