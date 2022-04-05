<?php
    session_start();
    include_once("../seguridad.php");
    include_once("../conexao.php");
    $id              = $_POST["id"];
    $id_persona      = $_POST["id_persona"];
    $id_servicio     = $_POST["id_servicio"];
    $fecha           = $_POST["fecha"];
    $forma_pago      = $_POST["forma_pago"];
    //echo $usuario;

    $query = mysqli_query($conn,"UPDATE reservas SET id_persona='$id_persona', id_servicio='$id_servicio', fecha='$fecha', forma_pago='$forma_pago'"); 

    if(mysqli_affected_rows($conn) !=0){
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/casasnocturnas/listar_reserva.php'>
        <script type=\"text/javascript\">
        alert(\"Reserva editado con exito.\");
        </script>
        ";
    }else{
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/casasnocturnas/listar_reserva.php'>
        <script type=\"text/javascript\">
        alert(\"Reserva no editado con exito.\");
        </script>
        ";
    }
?>