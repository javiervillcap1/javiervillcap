<?php
  session_start();
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

    <title>Cadastrar Servicio</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>
  <?php
    include_once("menu_admin.php");
  ?>
    <div class="container theme-showcase" role="main">
      <div class="page-header">
        <h1>Cadastrar Servicio</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
        <form class="form-horizontal" method="POST" action="processa/proc_cad_servicio.php">

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">ID Local</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="id" placeholder="ID Local">
                </div>
            </div>
            
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">ID Dama</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="id_dama" placeholder="ID Dama">
                </div>
            </div>
            
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">ID Producto</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="id_producto" placeholder="ID Producto">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Descripcion</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="descripcion" placeholder="Descripcion">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Precio</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="precio" placeholder="Precio">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
            </div>
        </form> 
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
