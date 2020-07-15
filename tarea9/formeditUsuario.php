<?php require_once('header.php');
    include("conexion.php");

    $id = $_GET['opcion'];
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
                <form action="editarUsuario.php" name="" method="POST" >
                <input type="hidden" value="<?php echo $id; ?>" name="id">
                  <div class="form-group">
                    <label for="correo">Coreeo</label>
                    <input type="email" class="form-control" name="correo" value="<?php echo $fila['correo'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" value="<?php echo $fila['password'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="nombre">Nombres</label>
                    <input type="text" class="form-control" name="nombres" value="<?php echo $fila['nombres'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="apellido">Apellidos</label>
                    <input type="text" class="form-control" name="apellidos" value="<?php echo $fila['apellidos'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Rol</label>
                    <select name="idrol" class="form-control">
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
                  <button type="submit" class="btn btn-primary">Guardar Cambios</button>
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