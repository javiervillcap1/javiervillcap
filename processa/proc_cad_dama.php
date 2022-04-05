<?php
    session_start();
    include_once("../seguridad.php");
    include_once("../conexao.php");
    $nombre              = $_POST["nombre"];
    $nacionalidad        = $_POST["nacionalidad"];
    $edad                = $_POST["edad"];
    $descripcion         = $_POST["descripcion"];
    //echo $usuario;

    $query = mysqli_query($conn,"INSERT INTO damas (nombre, nacionalidad, edad, descripcion) 
    VALUES ('$nombre', '$nacionalidad', '$edad', '$descripcion')");
    if(mysqli_affected_rows($conn) !=0){
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/casasnocturnas/listar_dama.php'>
        <script type=\"text/javascript\">
        alert(\"Dama cadastrado con exito.\");
        </script>
        ";
    }else{
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/casasnocturnas/listar_dama.php'>
        <script type=\"text/javascript\">
        alert(\"Dama no cadastrado con exito.\");
        </script>
        ";
    }
?>
