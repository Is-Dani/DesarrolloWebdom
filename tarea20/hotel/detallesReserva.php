<?php
session_start();
include("../back/conexion.php");
$nroH = $_POST['nroH'];
$ingreso = $_POST['ingreso'];
$salida = $_POST['salida'];
$sql = "SELECT * from habitacion inner join tipohabitaciones on habitacion.idtipohabitacion = tipohabitaciones.id where nro = $nroH";
$resultado = $con->query($sql);
$fila = $resultado->fetch_assoc();
?>
<div class="modal fade " id="modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-secondary" id="staticBackdropLabel">SISTEMAS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-contenido">
        <img src="#" alt="" class="img-fluid">
        <ul>
          <?php echo  '     
                <li>Fecha de ingreso: ' . $ingreso . '</li>
                <li>Fecha de salida: : ' . $salida. '</li>        
                <li>Correo : ' . $_SESSION['correo'] . '</li>
                <li>Nombre: ' . $_SESSION['nombre'] . '</li>
                <li>Numero de Habitacion: ' . $fila['nro'] . '</li>
                <li>Tipo de Habitacion: ' . $fila['descripcion'] . '</li>
                <li>Precio: ' . $fila['precio'] . '</li>
                <li>Espacio: ' . $fila['espacio'] . '</li>
                ';
          ?>
        </ul>
        <div class="row">
          <div class="col-6">
            <button type="button" class="btn btn-success" value="confirmar" onclick="usuarioReserva(<?php echo $nroH; ?>)">Confirmar</button>
          </div>
          <div class="col-6">
            <button type="button" class="btn btn-danger" value="cancelar">Cancelar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>