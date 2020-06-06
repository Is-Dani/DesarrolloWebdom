<div class="mb-5">
  <h3>Departamentos</h3>
  <select class="custom-select" onchange="selecDep()" id="select-dep">
  <option selected>Abrir el menu</option>
    <?php include("conexion.php");
    $sql = "SELECT * FROM departamento";
    $resultado = $con->query($sql);
    while ($fila  = $resultado->fetch_assoc()) {
      echo '
    <option value="'.$fila['id'].'">'.$fila['nombre'].'</option>
';
    }
    ?>

  </select>
</div>
<div>
  <h3>Lugares</h3>
  <select class="custom-select" id="selectLugar">

  
  </select>
</div>