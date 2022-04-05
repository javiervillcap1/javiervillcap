<?php
    session_start();
    include_once("../seguridad.php");
    include_once("../conexao.php");
    $id          = $_POST["id"];
    $id_local    = $_POST["id"];
    $id_dama     = $_POST["id_dama"];
    $id_producto = $_POST["id_producto"];
    $nombre      = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $precio      = $_POST["precio"];

    //echo $usuario;

    $query = mysqli_query($conn,"UPDATE servicios SET id='$id_local', id_dama='$id_dama', id_producto='$id_pproducto', nombre='$nombre', descripcion='$descripcion', precio='$precio' WHERE id_producto='$id'"); 

    if(mysqli_affected_rows($conn) !=0){
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/casasnocturnas/listar_producto.php'>
        <script type=\"text/javascript\">
        alert(\"Servicio editado con exito.\");
        </script>
        ";
    }else{
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/casasnocturnas/listar_producto.php'>
        <script type=\"text/javascript\">
        alert(\"Servicio no editado con exito.\");
        </script>
        ";
    }
?>