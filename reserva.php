<?php
  session_start();
  include_once("conexao.php");
  //Ejecuta consulta
  // $result = mysqli_query($conn,"SELECT * FROM personas WHERE id_persona='$id' LIMIT 1");
  //$resultado =  mysqli_fetch_assoc($result);

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
      <li class="nav-item">
          <a class="nav-link" href="salir.php">Salir</a>
      </li>
    </ul>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
  </div>
</nav><!-- Fim menu horizontal-->

<br/>
<br/>
<br/>
<div class="container theme-showcase" role="main">
      <div class="page-header">
        <h1>Solicitar Reserva</h1>
      </div>
      <?php echo "Su id para solictud de reserva es:"?>
      <div class="row">
        <div class="col-md-12">
        <form class="form-horizontal" method="POST" action="processa/proc_cad_reserva.php">

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">ID Cliente</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="id_persona" placeholder="ID Cliente">
                </div>
            </div>
            
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">ID Servicios</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="id_servicio" placeholder="ID Servicio">
                </div>
            </div>
            
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Fecha</label>
                <div class="col-sm-10">
                <input type="datetime" class="form-control" name="fecha">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Forma de Pago</label>
                <div class="col-sm-10">
                <select class="form-control" name="forma_pago">
                    <option value="dinero">Dinero</option>
                    <option value="tarjeta credito">Tarjeta Credito</option>
                    <option value="tarjeta debito">Tarjeta Debito</option>
                </select>
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

<br/>
    <?php
        $resultado = mysqli_query($conn,"SELECT * FROM servicios ORDER BY 'id_servicio'");
        $linhas = mysqli_num_rows($resultado);
    ?>
    <div class="container theme-showcase" role="main">
      <div class="page-header">
        <h1>Lista de Servicios</h1>
      </div>
      <div class="row">
        <div class="col-md-10">
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
                      <?php
                echo "</tr>";
            }
          ?>
            </tbody>
          </table>
        </div>
      </div>
    </div> <!-- /container -->

</body>
</html>