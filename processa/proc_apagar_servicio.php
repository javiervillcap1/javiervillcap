<?php
    session_start();
    include_once("../seguridad.php");
    include_once("../conexao.php");
    $id = $_GET["id"];

    $query = "DELETE FROM servicios WHERE id_servicio=$id";
    $resultado = mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn) !=0){
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/casasnocturnas/listar_servicio.php'>
        <script type=\"text/javascript\">
        alert(\"Servicio eliminado con exito.\");
        </script>
        ";
    }else{
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/casasnocturnas/listar_servicio.php'>
        <script type=\"text/javascript\">
        alert(\"Servicio no eliminado con exito.\");
        </script>
        ";
    }
?>