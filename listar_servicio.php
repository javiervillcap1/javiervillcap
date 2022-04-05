<?php
  session_start();
  include_once("conexao.php");
  include_once("seguridad.php");
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Victor Obregon">
    <link rel="icon" href="imagenes/favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/theme/">

    <title>Administrativo</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>
  <?php
    include_once("menu_admin.php");
    $resultado = mysqli_query($conn,"SELECT * FROM servicios ORDER BY 'id_servicio'");
    $linhas = mysqli_num_rows($resultado);
  ?>
    <div class="container theme-showcase" role="main">
      <div class="page-header">
        <h1>Lista de Servicios</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>ID Local</th>
                <th>ID Dama</th>
                <th>ID Producto</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
          <?php
            while($linhas = mysqli_fetch_array($resultado)){
                echo "<tr>";
                echo "<td>".$linhas['id_servicio']."</td>";
                echo "<td>".$linhas['id']."</td>";
                echo "<td>".$linhas['id_dama']."</td>";
                echo "<td>".$linhas['id_producto']."</td>";
                echo "<td>".$linhas['nombre']."</td>";
                echo "<td>".$linhas['descripcion']."</td>";
                echo "<td>".$linhas['precio']."</td>";?>
                        <td>
                        <a href='visualizar_servicio.php?id=<?php echo $linhas['id_servicio']; ?>'><button type='button' class='btn btn-sm btn-primary'>Visualizar</button></a>
                      - <a href='editar_servicio.php?id=<?php echo $linhas['id_servicio']; ?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a>
                      - <a href='processa/proc_apagar_servicio.php?id=<?php echo $linhas['id_servicio']; ?>'><button type='button' class='btn btn-sm btn-danger'>Eliminar</button></a>
                      <?php
                echo "</tr>";
            }
          ?>
            </tbody>
          </table>
        </div>
      </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
