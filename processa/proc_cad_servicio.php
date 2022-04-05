<?php
    session_start();
    include_once("../seguridad.php");
    include_once("../conexao.php");
    $id_local    = $_POST["id"];
    $id_dama     = $_POST["id_dama"];
    $id_producto = $_POST["id_producto"];
    $nombre      = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $precio      = $_POST["precio"];
    //echo $usuario;

    $query = mysqli_query($conn,"INSERT INTO servicios (id, id_dama, id_producto, nombre, descripcion, precio) 
    VALUES ('$id_local','$id_dama','$id_producto','$nombre','$descripcion','$precio')");
    if(mysqli_affected_rows($conn) !=0){
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/casasnocturnas/listar_servicio.php'>
        <script type=\"text/javascript\">
        alert(\"Servicio cadastrado con exito.\");
        </script>
        ";
    }else{
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/casasnocturnas/listar_servicio.php'>
        <script type=\"text/javascript\">
        alert(\"Servicio no cadastrado con exito.\");
        </script>
        ";
    }
?>