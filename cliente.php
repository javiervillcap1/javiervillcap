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
          <a class="nav-link" href="#">Registrar-se</a>
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

 <div id="map"></div>
 <script>
      var customLabel = {
      restaurant: {
      label: 'R'
        },
      bar: {
      label: 'B'
        }
      };

      function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        center: new google.maps.LatLng(-17.786373,-63.175602),
        zoom: 12
      });
      var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('resultado.php', function(data) {
      var xml = data.responseXML;
      var markers = xml.documentElement.getElementsByTagName('marker');
      Array.prototype.forEach.call(markers, function(markerElem) {
      var name = markerElem.getAttribute('name');
      var address = markerElem.getAttribute('address');
      var type = markerElem.getAttribute('type');
      var point = new google.maps.LatLng(
        parseFloat(markerElem.getAttribute('lat')),
        parseFloat(markerElem.getAttribute('lng')));

      var infowincontent = document.createElement('div');
      var strong = document.createElement('strong');
      strong.textContent = name
      infowincontent.appendChild(strong);
      infowincontent.appendChild(document.createElement('br'));

      var text = document.createElement('text');
      text.textContent = address
      infowincontent.appendChild(text);
      infowincontent.appendChild(document.createElement('br'));

      var icon = customLabel[type] || {};
      var marker = new google.maps.Marker({
      map: map,
      position: point,
      label: icon.label
      });
      marker.addListener('click', function() {
      infoWindow.setContent(infowincontent);
      infoWindow.open(map, marker);
      document.getElementById('overlay').style.visibility = 'visible'
      var contenedor = document.getElementById('contenedor-inputs')
      contenedor.innerHTML = `<strong>Nombre: </strong> ${name} <br/> <strong>Direccion: </strong>${address}<br/> <strong>Coordenadas: </strong>${point}<br/> <strong>Tipo: </strong>${type}<br/>`
        });
      });
    });
  }
    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
        new ActiveXObject('Microsoft.XMLHTTP') :
        new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
         request.onreadystatechange = doNothing;
         callback(request, request.status);
        }
      };

      request.open('GET', url, true);
      request.send(null);
    }

    function doNothing() {}
      var overlay = document.getElementById('overlay')
      var popup = document.getElementById('popup')

      function cerrar(){
        document.getElementById('overlay').style.visibility = 'hidden'
      }

 </script>
 <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5ZNWs0jE62Kc1Z6lyvProOaPnmdqBkdc&callback=initMap">
 </script>

    <div class="overlay" id="overlay">
          <div class="popup" id="popup">
              <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup" onclick="cerrar()"><i class="fas fa-times"></i></a>
              <h3>Casas Nocturnas</h3>
              <form action="">
                <div class="contenedor-inputs" id="contenedor-inputs">                 
                </div>
                <input type="button" id="btn-submit" class="btn-submit" value="Reservas" onclick="location.href='http://localhost:8080/casasnocturnas/reserva.php'"/>
              </form>
          </div>
    </div>

</body>
  <footer id="piedepag">&copy; <strong> Casas Nocturnas </strong></footer>
</html>