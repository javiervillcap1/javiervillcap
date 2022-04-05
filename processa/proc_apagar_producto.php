<?php
    session_start();
    include_once("../seguridad.php");
    include_once("../conexao.php");
    $id = $_GET["id"];

    $query = "DELETE FROM productos WHERE id=$id";
    $resultado = mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn) !=0){
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/casasnocturnas/listar_producto.php'>
        <script type=\"text/javascript\">
        alert(\"Producto eliminado con exito.\");
        </script>
        ";
    }else{
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/casasnocturnas/listar_producto.php'>
        <script type=\"text/javascript\">
        alert(\"Producto no eliminado con exito.\");
        </script>
        ";
    }
?>