<?php
include("conexion.php");
$id = $_POST['id'];
$sql = "SELECT * from habitacion where id='$id'";
$resultado = $con->query($sql);
$fila = $resultado->fetch_assoc();
?>

<div class="pd">
    <h5>EDITAR HABITACION</h5>
    <form>
        <input type="hidden" id="id" value="<?php echo $fila['id'] ?>">
        <label>Numero de Habitacion</label>
        <input type="number" name="nro" id="nro" value="<?Php echo $fila['nro']; ?>">
        <div class="form-group">
            <label> Tipo de habitación *</label>
            <select name="tipohabitacion" id="tipohabitacion">
                <?php
                 $sql1 = "SELECT * FROM tipohabitaciones";
                 $resultado1 = $con->query($sql1);
                while ($fila1 = $resultado1->fetch_assoc()) {
                    echo '<option value="' . $fila1['id'] . '"> ' . $fila1['descripcion'] . '</option>';
                }
                ?>
            </select>
        </div>
        <label for="bano">Bano Privado</label>
        <input type="radio" id="si" name="bano" id="si" value="1">
        <label for="si">Si</label>
        <input type="radio" id="no" name="bano" id="no" value="0">
        <label for="no">No</label><br>

        <label for="precio">Precio</label>
        <input type="number" name="precio" id="precio" value="<?Php echo $fila['precio']; ?>"><br>
        <label for="espacio">Espacio</label>
        <input type="text" id="espacio" name="espacio" value="<?php echo $fila['espacio']; ?>"><br>

        <input type="button" name="" value="Guardar Cambios" onclick="llamarEditar()">
    </form>
</div>