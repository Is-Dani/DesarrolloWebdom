<?php
session_start();
include('comprobarCorreo.php');
include('comprobarUsuario.php');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>hotel</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <link rel="stylesheet" href="css/_all-skins.min.css">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
  <link rel="stylesheet" href="style.css">
  <script src="ajax.js"></script>
</head>

<body class="hold-transition skin-blue-light sidebar-mini">
  <div class="wrapper">

    <header class="main-header">

      <a href="header.html" class="logo">
        <span class="logo-mini"><b></b>hotel</span>
        <span class="logo-lg"><b>HoteL</b></span>
      </a>
      <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Navegación</span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="hidden-xs"><?php echo $_SESSION['correo']; ?></span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  <p>
                    <?php echo $_SESSION['nombre']; ?>
                    <small>
                      <?php 
                        if($_SESSION['rol']==1){
                          echo 'Administrador';
                        }else{
                          echo 'Recepcionista';
                        }
                      ?>
                    </small>
                  </p>
                </li>
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="cerrarSesion.php" class="btn btn-default btn-flat">Cerrar</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <aside class="main-sidebar">
      <section class="sidebar">
        <ul class="sidebar-menu">
          <li class="header"></li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-laptop"></i>
              <span>Habitaciones</span>
              <i class="fas fa-sort-down pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="javascript:cargar('formAgregarHabit.php')"><i class="fas fa-plus-circle"></i> Agregar Habitacion</a></li>
              <li><a href="javascript:cargar('formAgregarTipoHabit.php')"><i class="fas fa-plus-circle"></i> Agregar Tipo de Habitacion</a></li>
              <li><a href="javascript:cargar('listarHabit.php')"><i class="far fa-list-alt"></i> Listar</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fas fa-user-plus"></i>
              <span>Usuarios</span>
              <i class="fas fa-sort-down pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="javascript:cargar('formAgregarUsuario.php')"><i class="fas fa-plus-circle"></i>Agregar</a></li>
              <li><a href="javascript:cargar('listarUsuario.php')"><i class="far fa-list-alt"></i> Listar</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fas fa-user-plus"></i>
              <span>Reservas</span>
              <i class="fas fa-sort-down pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="listarReservas.php"><i class="far fa-list-alt"></i>Reportes excel</a></li>
              <li><a href="javascript:cargar('listarReservas.php')"><i class="far fa-list-alt"></i> Lista de Reservas</a></li>
            </ul>
          </li>
        </ul>
      </section>
    </aside>
    <div id="contenido">

    </div>

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/app.min.js"></script>
</body>

</html>