<?php
  session_start();
  include_once("conexao.php");
  include_once("seguridad.php");
  $id = $_GET["id"];
  //Ejecuta consulta
  $result = mysqli_query($conn,"SELECT * FROM personas WHERE id_persona='$id' LIMIT 1");
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

    <title>Editar Usuario</title>

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
        <h1>Editar Usuario</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
        <form class="form-horizontal" method="POST" action="processa/proc_editar_usuario.php">

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Nivel Acceso</label>
                <div class="col-sm-10">
                <select class="form-control" name="tipo_persona">
                    <option value="adm">Administrador</option>
                </select>
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php echo $resultado['nombre']; ?>">
                </div>
            </div>
            
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">CI</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="ci" placeholder="CI" value="<?php echo $resultado['ci']; ?>">
                </div>
            </div>
            
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Telefono</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="telefono" placeholder="Telefono" value="<?php echo $resultado['telefono']; ?>">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Correo</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" name="correo" placeholder="Correo" value="<?php echo $resultado['correo']; ?>">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Direccion</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="direccion" placeholder="Direccion" value="<?php echo $resultado['direccion']; ?>">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="usuario" placeholder="Usuario" value="<?php echo $resultado['usuario']; ?>">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Clave</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" name="clave" placeholder="Clave" value="<?php echo $resultado['clave']; ?>">
                </div>
            </div>

            <!--ID invisivel para editar-->
            <input type="hidden" name="id" value="<?php echo $resultado['id_persona']; ?>">

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