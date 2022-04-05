<?php
    session_start();
    include_once("../conexao.php");
    $id_persona       = $_POST["id_persona"];
    $id_servicio      = $_POST["id_servicio"];
    $fecha            = $_POST["fecha"];
    $forma_pago       = $_POST["forma_pago"];
    //echo $usuario;

    $query = mysqli_query($conn,"INSERT INTO reservas (id_persona, id_servicio, fecha,forma_pago) 
    VALUES ('$$id_persona ', '$id_servicio', '$$fecha', '$forma_pago')");
    if(mysqli_affected_rows($conn) !=0){
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/casasnocturnas/'>
        <script type=\"text/javascript\">
        alert(\"Tu reserva ah sido efectuada con exito.\");
        </script>
        ";
    }else{
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/casasnocturnas/'>
        <script type=\"text/javascript\">
        alert(\"Tu reserva no ah sido efectuada con exito.\");
        </script>
        ";
    }
?>