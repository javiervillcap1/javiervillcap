<?php
session_start();
  include_once("conexao.php");
?>
<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Casas Nocturnas</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
    <script src="https://kit.fontawesome.com/a74e26bc41.js" crossorigin="anonymous"></script>
    <link  href = " https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans "  rel = " stylesheet ">

  </head>

<body>
  
<!-- Inicio menu horizontal-->
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="index.php">Casas Nocturnas</a>
  <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
          <a class="nav-link" href="registrar-se.php">Registrar-se</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="login.php">Iniciar sesión</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">Contacto</a>
      </li>
    </ul>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
  </div>
</nav><!-- Fim menu horizontal-->

<div class="container theme-showcase" role="main">
      <div class="page-header">
        <h1>Cadastrar Cliente</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
        <form class="form-horizontal" method="POST" action="processa/proc_cad_cliente.php">

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                </div>
            </div>
            
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">CI</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="ci" placeholder="CI">
                </div>
            </div>
            
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Telefono</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="telefono" placeholder="Telefono">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Correo</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" name="correo" placeholder="Correo">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Direccion</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="direccion" placeholder="Correo">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="usuario" placeholder="Usuario">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Clave</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" name="clave" placeholder="Clave">
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

</body>
</html>