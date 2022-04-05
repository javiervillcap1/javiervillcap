<?php
    session_start();
    include_once("../seguridad.php");
    include_once("../conexao.php");

    $nombre     = $_POST["name"];
    $direccion   = $_POST["address"];
    $latitud    = $_POST["lat"];
    $longitud   = $_POST["lng"];
    $tipo       = $_POST["type"];

    //echo $usuario;

    $query = mysqli_query($conn,"INSERT INTO markers (name, address, lat, lng, type) 
    VALUES ('$nombre', '$direccion', '$latitud', '$longitud', '$tipo')");
    if(mysqli_affected_rows($conn) !=0){
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/casasnocturnas/listar_local.php'>
        <script type=\"text/javascript\">
        alert(\"Local cadastrado con exito.\");
        </script>
        ";
    }else{
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/casasnocturnas/listar_local.php'>
        <script type=\"text/javascript\">
        alert(\"Local no cadastrado con exito.\");
        </script>
        ";
    }
?>
