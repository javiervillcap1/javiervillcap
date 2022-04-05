<?php
    session_start();
    include_once("../seguridad.php");
    include_once("../conexao.php");
    $id              = $_POST["id"];
    $nombre          = $_POST["name"];
    $address         = $_POST["address"];
    $latitud         = $_POST["lat"];
    $longitud        = $_POST["lng"];
    $tipo            = $_POST["type"];
    //echo $usuario;

    $query = mysqli_query($conn,"UPDATE markers SET name='$nombre', address='$address', lat='$latitud', lng='$longitud', type='$tipo' WHERE id_persona='$id'"); 

    if(mysqli_affected_rows($conn) !=0){
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/casasnocturnas/listar_local.php'>
        <script type=\"text/javascript\">
        alert(\"Local editado con exito.\");
        </script>
        ";
    }else{
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/casasnocturnas/listar_local.php'>
        <script type=\"text/javascript\">
        alert(\"Local no editado con exito.\");
        </script>
        ";
    }
?>