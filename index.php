<?php
  session_start();
  include_once("conexao.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Victor Obregon">
    <link rel="icon" href="imagenes/favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/theme/">



    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>






    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xbox Series S</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <header>
        <nav>
            <input type="checkbox" id="ckbox">
            <label for="ckbox" class="drawer">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </label>
            <h1>LA VOZ DE CRISTO</h1>

            <ul class="menu-box">
                <li><a href="#" class="fa fa-home"> Inicio</a></li>
                <li><a href="registrar-se.php" class="fa fa-html5"> Registrar-se</a></li>
                <li><a href="login.php" class="fa fa-clock-o"> Iniciar sesión</a></li>
                <li><a href="#" class="fa fa-cloud-download"> Desargas</a></li>
                <li><a href="#" class="fa fa-envelope-open"> Contacto</a></li>
                <li><a href="#" class="fa fa-credit-card"> Pagos</a></li>
            </ul>
        </nav>
    </header>

    <main>
<!-- todo esto es un comentorio obseno-->
 <?php
    $resultado = mysqli_query($conn,"SELECT * FROM cancion ORDER BY 'Codigo'");
    $linhas = mysqli_num_rows($resultado);
  ?>
    <div class="container theme-showcase" role="main">
      <div class="page-header">
        <h1>Lista de Canciones</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>Descripcion</th>
              </tr>
            </thead>
            <tbody>
          <?php
            while($linhas = mysqli_fetch_array($resultado)){
                echo "<tr>";
                echo "<td>".$linhas['Nombre']."<br>".$linhas['Descripcion']."</td>";

            }
          ?>
            </tbody>
          </table>
        </div>
      </div>
    </div> <!-- /container -->

<!-- todo esto es un comentorio obseno************************************** -->


        <div class="image">
            <img src="images/xboxseriess.jpg" alt="">

        </div>
    </main>

    <footer>
        <p>Autor: JV</p>
    </footer>
</body>

</html>
