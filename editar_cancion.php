<?php
  session_start();
  include_once("conexao.php");
  include_once("seguridad.php");
  $Codigo = $_GET["id"];
  //Ejecuta consulta
  $result = mysqli_query($conn,"SELECT * FROM cancion WHERE Codigo='$Codigo' LIMIT 1");
  $resultado =  mysqli_fetch_assoc($result);
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

    <title>Editar Cancion</title>

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
        <h1>Editar Cancionero</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
        <form class="form-horizontal" method="POST" action="processa/proc_editar_cancion.php">

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Numero de la cancion</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="Numero" placeholder="Numero" value="<?php echo $resultado['Numero']; ?>">
                </div>
            </div>
            
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Nombre de la cancion</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="Nombre" placeholder="Nombre" value="<?php echo $resultado['Nombre']; ?>">
                </div>
            </div>
            
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Letra de la cancion</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="Descripcion" placeholder="Letra" value="<?php echo $resultado['Descripcion']; ?>">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail33" class="col-sm-2 control-label">Estado de la cancion</label>
                <div class="col-sm-10">

                <?php if($resultado['Estado']==1){  ?>
                    <input type="checkbox" class="form-control" checked="" name="Estado" placeholder="Estado">
                <?php }else{ ?>

                <?php   ?>
                    <input type="checkbox" class="form-control" name="Estado" placeholder="Estado">
                <?php } ?>
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Fecha de registro</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" name="Registro" placeholder="Registro" value = "<?php echo $resultado['Registro']; ?>">
                </div>
            </div>

            <!--ID invisivel para editar-->
            <input type="hidden" name="Codigo" value="<?php echo $resultado['Codigo']; ?>">

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Editar</button>
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
