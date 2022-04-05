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

    <title>Visualizar Usuario</title>

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
    <div class="container theme-showcase" role="main" style="margin-top: 40px">
        <div class="page-header">
            <h1>Visualizar Usuario</h1>
      </div>

    <div class="row">
    <div class="col-md-12">
            <div class="col-sm-9 col-md-11">
               <b> ID: </b> <?php echo $resultado['id_persona'];?>
            </div>
            <div class="col-sm-9 col-md-11">
               <b> Nivel de Acceso: </b> <?php echo $resultado['tipo_persona'];?>
            </div>
            <div class="col-sm-9 col-md-11">
               <b> Nombre: </b> <?php echo $resultado['nombre'];?>
            </div>
            <div class="col-sm-9 col-md-11">
               <b> CI: </b> <?php echo $resultado['ci'];?>
            </div>
            <div class="col-sm-9 col-md-11">
               <b> Telefono: </b> <?php echo $resultado['telefono'];?>
            </div>
            <div class="col-sm-9 col-md-11">
               <b> Correo: </b> <?php echo $resultado['correo'];?>
            </div>
            <div class="col-sm-9 col-md-11">
               <b> Direccion: </b> <?php echo $resultado['direccion'];?>
            </div>
            <div class="col-sm-9 col-md-11">
               <b> Usuario: </b> <?php echo $resultado['usuario'];?>
            </div>
            <div class="col-sm-9 col-md-11">
               <b> Clave: </b> <?php echo $resultado['clave'];?>
            </div>

        </div>
    </div>
    <div class="row">
            <div class="pull-right">
                    <a href='listar_usuario.php?id=<?php echo $resultado['id_persona']; ?>'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>
							
                    <a href='editar_usuario.php?id=<?php echo $resultado['id_persona']; ?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a>
			
			        <a href='processa/proc_apagar_usuario.php?id=<?php echo $resultado['id_persona']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
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
