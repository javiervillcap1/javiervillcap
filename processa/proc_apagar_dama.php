<?php
    session_start();
    include_once("../seguridad.php");
    include_once("../conexao.php");
    $id = $_GET["id"];

    $query = "DELETE FROM damas WHERE id_dama=$id";
    $resultado = mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn) !=0){
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/casasnocturnas/listar_dama.php'>
        <script type=\"text/javascript\">
        alert(\"Dama eliminado con exito.\");
        </script>
        ";
    }else{
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost:8080/casasnocturnas/listar_dama.php'>
        <script type=\"text/javascript\">
        alert(\"Dama no eliminado con exito.\");
        </script>
        ";
    }
?>