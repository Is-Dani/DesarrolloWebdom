<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h1 class="box-title">Agregar Usuario</h1>
            <div class="box-tools pull-right">
            </div>
          </div>
          <section class="container">
            <div class="container row mi-padding">
              <div class="offset col-sm-7">

                <form action="" name="" method="">
                  <div class="form-group">
                    <label for="correo">Correo</label>
                    <input type="email" class="form-control" id="correo">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password">
                  </div>
                  <div class="form-group">
                    <label for="nombre">Nombres</label>
                    <input type="text" class="form-control" id="nombre">
                  </div>
                  <div class="form-group">
                    <label for="apellido">Apellidos</label>
                    <input type="text" class="form-control" id="apellido">
                  </div>
                  <div class="form-group">
                    <label>Rol</label>
                    <select class="form-control" id="idrol">
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
                  <input type="button" class="btn btn-primary" value="registrar" onclick="llamarregistrar('agregarUsuario.php')">
                </form>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
</div>