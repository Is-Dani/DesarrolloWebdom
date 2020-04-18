<?php require_once('header.php'); ?>

<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h1 class="box-title">Usuarios</h1>
            <div class="box-tools pull-right">
            </div>
          </div>
          <section class="container">
            <div class="container row">
              <div class="col-sm-6">

                <form action="agregarUsuario.php" name="" method="POST" >
                  <div class="form-group">
                    <label for="correo">Coreeo</label>
                    <input type="email" class="form-control" name="correo">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                  </div>
                  <div class="form-group">
                    <label for="nombre">Nombres</label>
                    <input type="text" class="form-control" name="nombres">
                  </div>
                  <div class="form-group">
                    <label for="apellido">Apellidos</label>
                    <input type="text" class="form-control" name="apellidos">
                  </div>
                  <div class="form-group">
                    <label>Rol</label>
                    <select name="idrol" class="form-control">
                      <?php
                      
                      include("conexion.php");
                      $sql = "SELECT * FROM roles";
                      $resultado = $con->query($sql);
                      while ($fila = $resultado->fetch_assoc()) {
                        echo '<option value="' . $fila['id'] . '"> ' . $fila['descripcion'] . '</option>';
                      }
                      ?>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </form>

              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>


</div>
<?php require_once('footer.php'); ?>