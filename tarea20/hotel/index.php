<?php
session_start();
?>
<!doctype html>
<html lang="es">

<head>
  <title>Hotel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700" rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <header>

    <nav class="navbar navbar-expand-md navbar-dark bg-light">
      <div class="container">
        <a class="navbar-brand" href="index.html">Hotel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
          <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
            <li class="nav-item">
              <a class="nav-link " id="navInicio" onclick="cargarHotel('inicio.html', '#navInicio')" href="javascript:cargarHotel('inicio.html')">Inicio</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" id="navHabitaciones" href="javascript:cargarHotel('habitaciones.html', '#navHabitaciones')">Habiaciones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="navContactenos" href="javascript:cargarHotel('contactenos.html', '#navContactenos')">Contactenos</a>
            </li>
            <?php
            if (isset($_SESSION['correo'])) {
              echo '
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">' . $_SESSION['correo'] . '</a>
              <div class="dropdown-menu text-muted p-4">
                <p class="text-muted">';
              if ($_SESSION['rol'] == 0) {
                echo 'usuario';
              } else {
                if ($_SESSION['rol'] == 1) {
                  echo 'Administrador';
                } else {
                  echo 'Recepcionista';
                }
              }
              echo '</p>
                <a class="dropdown-item" href="#">' . $_SESSION['nombre'] .''. $_SESSION['apellido'] . '</a>
                <a class="dropdown-item"">Reservas</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../back/cerrarSesion.php">Cerrar Sesion</a>
              </div>
            </li>
              ';
            } else {
            ?>

              <li class="nav-item">
                <a class="nav-link" href="../back/login.php">Login</a>
              </li>
            <?php } ?>
            <li class="nav-item cta">
              <a class="nav-link" id="navReservas" href="javascript:cargarHotel('reservas.php', '#navReservas')"><span>Reservas</span></a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </header>

  <div id="contenidoPrincipal">
    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/img_1.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-12 text-center">

            <div class="mb-5 elemento-animado">
              <h1>Reserva ahora tu habitacion ideal</h1>
              <p><a href="reservas.php" class="btn btn-primary">Reservas</a></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="site-section bg-light ocultar">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 titulo text-center">
            <h4 class="subtitulo">HOTEL</h4>
            <h2 class="titulo-cabecera">Habitaciones Destacadas</h2>
          </div>
        </div>
        <div class="row ">
          <div class="col-md-7">
            <div class="media d-block room mb-0">
              <figure>
                <img src="images/img_1.jpg" alt="Generic placeholder image" class="img-fluid">
                <div class="overlap-text">
                  <span>
                    Habitacion Destacada
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                  </span>
                </div>
              </figure>
              <div class="media-body">
                <h3 class="mt-0"><a href="#">Matrimonial</a></h3>
                <ul class="room-specs">
                  <li><span class="ion-ios-people-outline"></span> 2 Personas</li>
                  <li><span class="ion-ios-crop"></span> 22 ft <sup>2</sup></li>
                </ul>
                <p>Nulla vel metus scelerisque ante sollicitudin. Fusce condimentum nunc ac nisi vulputate fringilla. </p>
                <p><a href="#" class="btn btn-primary btn-sm">reserva ahora a 50Bs</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-5 room-thumbnail-absolute">
            <a href="#" class="media d-block room bg first-room" style="background-image: url(images/img_2.jpg); ">
              <div class="overlap-text px-5">
                <span>
                  Habitacion Simple
                  <span class="ion-ios-star"></span>
                  <span class="ion-ios-star"></span>
                  <span class="ion-ios-star"></span>
                </span>
                <span class="pricing-from">
                  Desde 10Bs
                </span>
              </div>
            </a>

            <a href="#" class="media d-block room bg second-room" style="background-image: url(images/img_4.jpg); ">
              <div class="overlap-text px-5">
                <span>
                  Habitacion Doble
                  <span class="ion-ios-star"></span>
                  <span class="ion-ios-star"></span>
                  <span class="ion-ios-star"></span>
                </span>
                <span class="pricing-from">
                  Desde 40Bs
                </span>
              </div>
            </a>

          </div>
        </div>
      </div>
    </section>

    <footer class="footer-seccion">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3>Telefonos</h3>
            <p class="lead"><a href="tel://">12345678</a></p>
          </div>
          <div class="col-md-4">
            <h3>Contacte con nostros</h3>
            <p>Siguenos en nuestras redes sociales</p>
            <p>
              <a href="#" class="pl-0 p-3"><span class="fa fa-facebook"></span></a>
              <a href="#" class="p-3"><span class="fa fa-twitter"></span></a>
              <a href="#" class="p-3"><span class="fa fa-instagram"></span></a>
              <a href="#" class="p-3"><span class="fa fa-youtube-play"></span></a>
            </p>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="../back/ajax.js"></script>

</body>

</html>
