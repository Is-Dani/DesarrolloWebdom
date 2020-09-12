<?php
include("conexion.php");
$id = $_POST['id'];
$sql = "SELECT * from usuarios where id='$id'";
$resultado = $con->query($sql);
$fila = $resultado->fetch_assoc();
?>
<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h1 class="box-title">Editar Usuario</h1>
            <div class="box-tools pull-right">
            </div>
          </div>
          <section class="container">
            <div class="row justify-content-between mi-padding">
              <div class="offset col-12 col-sm-6">
                <form>
                  <input type="hidden" value="<?php echo $id; ?>" id="Eid">
                  <div class="form-group">
                    <label for="correo">Coreeo</label>
                    <input type="email" class="form-control" id="Ecorreo" value="<?php echo $fila['correo']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" id="Epassword" value="<?php echo $fila['password']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="nombre">Nombres</label>
                    <input type="text" class="form-control" id="Enombre" value="<?php echo $fila['nombres']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="apellido">Apellidos</label>
                    <input type="text" class="form-control" id="Eapellido" value="<?php echo $fila['apellidos']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Rol</label>
                    <select id="Eidrol" class="form-control">
                      <?php
                      include("conexion.php");
                      $sql1 = "SELECT * FROM roles";
                      $resultado1 = $con->query($sql1);
                      while ($fila1 = $resultado1->fetch_assoc()) {
                        echo '<option value="' . $fila1['id'] . '"> ' . $fila1['descripcion'] . '</option>';
                      }
                      ?>
                    </select>
                  </div>
                  <input type="button" class="btn btn-primary" value="Guardar Cmbios" onclick="llamarEditar()">
                </form>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
</div>