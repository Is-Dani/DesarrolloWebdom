<?php
session_start();
include '../back/conexion.php';
$sql = "SELECT * from habitacion";
$respuesta = $con->query($sql);
while ($fila = $respuesta->fetch_assoc())
?>
<section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
  <div class="container">
    <div class="row align-items-center site-hero-inner justify-content-center">
      <div class="col-md-12 text-center">

        <div class="mb-5 elemento-animado">
          <h1>Reservas</h1>
        </div>

      </div>
    </div>
  </div>
</section>
<?php
if (isset($_SESSION['correo'])) {
?>
  <section class="site-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="mb-5">Formulario de Reservas</h2>
          <form action="" method="" class="formulario py-5 px-md-5 px-3">
            <div class="row">
              <div class="col-sm-6 form-group">
                <label for="">Fecha de Ingreso</label>
                <div style="position: relative;">
                  <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>
                  <input type='date' class="form-control" id='ingreso' />
                </div>
              </div>
              <div class="col-sm-6 form-group">
                <label for="">Fecha de Salida</label>
                <div style="position: relative;">
                  <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>
                  <input type='date' class="form-control" id='salida' />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="numhReserva">Numero de Habitacion</label>
                <select id="numhReserva" class="form-control">
                  <?php
                  $resultado = $con->query($sql);
                  while ($fila = $resultado->fetch_assoc()) {
                    echo '<option value="' . $fila['nro'] . '"> ' . $fila['nro'] . '</option>';
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="correoReserva">Confirme su correo</label>
                <input type="email" id="correoReserva" class="form-control ">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="button" value="Reservar" class="btn btn-primary" onclick="cargarModal('detallesReserva.php')">
              </div>
            </div>
          </form>
        </div>
        <div id="modalAjax">
        </div>
        <div class="offset-md-2 col-md-4 room-thumbnail-absolute mt-5 pt-5">
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
        <div id="alert" class="alert alert-succes my-5 " role="alert" class="hiden">
          Se reservo con exito, Para ver mas detalles <a href="#" class="alert-link">reservas</a> gracias.
        </div>
      </div>
    </div>
  </section>
<?php
} else {
?>
  <div class="container py-5 my-5">
    <div class="alert alert-danger my-5 " role="alert">
      Para reservar una habitacion debe <a href="../back/login.php" class="alert-link">Iniciar Sesion/Registrar</a> sera redirigido en 5s.
    </div>
    <meta http-equiv="refresh" content="7; url=../back/login.php">
  </div>
<?php
}
?>
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
<style>
  #alert{
    display: none;
  }
</style>