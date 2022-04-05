<?php
    session_start();
    include_once("../seguridad.php");
    include_once("../conexao.php");
    $nombre           = $_POST["nombre"];
    $descripcion      = $_POST["descripcion"];
    $precio           = $_POST["precio"];
    //echo $usuario;

    $query = mysqli_query($conn,"INSERT INTO productos (nombre, descripcion, precio) 
    VALUES ('$nombre', '$descripcion', '$precio')");
    if(mysqli_affected_rows($conn) !=0){
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/casasnocturnas/listar_producto.php'>
        <script type=\"text/javascript\">
        alert(\"Producto cadastrado con exito.\");
        </script>
        ";
    }else{
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/casasnocturnas/listar_producto.php'>
        <script type=\"text/javascript\">
        alert(\"Producto no cadastrado con exito.\");
        </script>
        ";
    }
?>
