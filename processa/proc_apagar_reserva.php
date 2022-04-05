<?php
    session_start();
    include_once("../seguridad.php");
    include_once("../conexao.php");
    $id = $_GET["id"];

    $query = "DELETE FROM reservas WHERE id_reserva=$id";
    $resultado = mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn) !=0){
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/casasnocturnas/listar_reserva.php'>
        <script type=\"text/javascript\">
        alert(\"Usuario eliminado con exito.\");
        </script>
        ";
    }else{
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/casasnocturnas/listar_reserva.php'>
        <script type=\"text/javascript\">
        alert(\"Usuario no eliminado con exito.\");
        </script>
        ";
    }
?>