<?php
 include("conexion.php");
    $id=$_POST['id'];
    /// registrar en la bd
    
    $sql="SELECT * FROM person WHERE id = '$id'";
    //echo $sql;
    $resultado=$con->query($sql);
    $fila = $resultado->fetch_assoc();
?>


<form >    
    <div class="form-group">
      <input type="hidden" class="form-control" id="id" value="<?php echo $fila["id"];?>">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" id="nombre" value="<?php echo $fila["nombre"];?>">
    </div>
    <div class="form-group">
      <label for="apellido">Apellido</label>
      <input type="text" class="form-control" id="apellido" value="<?php echo $fila["apellido"];?>">
    </div>
    <input type="button" class="btn btn-primary" value="Guardar Cmbios" onclick="llamarEditar()">
  </form>