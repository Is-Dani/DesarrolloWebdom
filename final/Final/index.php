<?php
  session_start();
  if(isset($_SESSION['correo'])){
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <title>Fina sis256</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-12 bg-primary">
        <div class="row ">
          <div class="col-3">
            <img src="images/usfx.png" alt="" width="60px">
          </div>
          <div class="col-6">
            <div class="text-danger">
              <h6><span  style="font-size:x-large;">U</span>NIVERSIDAD DE <span  style="font-size:x-large;">S</span>AN <span  style="font-size:x-large;">F</span>RANCISCO <span  style="font-size:x-large;">X</span>AVIER</h6>
            </div>
            <div style="color: blue;">
              <p><span  style="font-size:x-large;">F</span>ACULTAD DE <span  style="font-size:x-large;">T</span>ECNOLOGIA</p>
            </div>
          </div>
          <div class="col-3 mt-3">
            <p class="displa"><span style="color:red;"><span style="font-size:large;">S</span>UCR</span><span style="color: yellow;">E <span style="font-size: large;">B</span>OL</span><span style="color: green;">IVIA</span></p>
          </div>
        </div>
        <div class="row mx-3">
          <div class="col-12">
            <ul class="list-inline">
              <li class="list-inline-item px-5">Carrera Ing de Sistemas /Ciencias de la Computación </li>
              <li class="list-inline-item px-5">Semestre 1-2020 </li>
              <li class="list-inline-item px-5">usuario : <?php echo $_SESSION['nombre'] ?></li>
            </ul>
          </div>
          <div class="col-12">
            <ul class="list-inline">
              <li class="list-inline-item px-5">Hoy es : 14/09/2020 </li>
              <li class="list-inline-item px-5">correo: <?php echo $_SESSION['correo'] ?> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row ">
      <div class="col-3 bg-secondary py-2 border"><a class="text-dark text-decoration-none" href="javascript:cargar2('login.html')">login    </a> </div>
      <div class="col-3 bg-secondary py-2 border"><a class="text-dark text-decoration-none" href="#">Pregunta2</a> </div>
      <div class="col-2 bg-secondary py-2 border"><a class="text-dark text-decoration-none" href="javascript:cargar('formulario.html')">Pregunta3</a> </div>
      <div class="col-2 bg-secondary py-2 border"><a class="text-dark text-decoration-none" href="javascript:cargar2('listarnoticia.php')">Pregunta4</a> </div>
      <div class="col-2 bg-secondary py-2 border"><a class="text-dark text-decoration-none" href="javascript:cargar('seleccionar.html')">Pregunta5</a> </div>
    </div>
    <div class="row" style="min-height: 300px;" >
      <div class="col-3 border" id="contenido">

      </div>
      <div class="col-9 border" id="resultado">

      </div>
    </div>
    <div class="row text-center">
      <div class="col-12 bg-warning border">
        <p>Examen Final SIS 256</p>
        <p>14-09-20</p>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="ajax.js"></script>
</body>

</html>
<?php
  }else{
    header("Location: login.html");
  }
?>