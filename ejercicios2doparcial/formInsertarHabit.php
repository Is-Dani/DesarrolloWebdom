<?php
include("conexion.php");
$sql = "SELECT * from habitacion";
$resultado = $con->query($sql);
$fila = $resultado->fetch_assoc();
?>

<div class="pd">
    <h5>INSERTAR HABITACION</h5>
    <form>
        <label>Numero de Habitacion</label>
        <input type="text" name="nro" id="nro" value=""><br>
            <label> Tipo de habitación *</label>
            <select name="tipohabitacion" id="tipohabitacion">
                <?php
                 $sql1 = "SELECT * FROM tipohabitaciones";
                 $resultado1 = $con->query($sql1);
                while ($fila1 = $resultado1->fetch_assoc()) {
                    echo '<option value="' . $fila1['id'] . '"> ' . $fila1['descripcion'] . '</option>';
                }
                ?>
            </select><br>
        <label for="bano">Bano Privado</label>
        <input type="radio" id="si" name="bano" id="si" value="1">
        <label for="si">Si</label>
        <input type="radio" id="no" name="bano" id="no" value="0">
        <label for="no">No</label><br>
        <label for="precio">Precio</label>
        <input type="number" name="precio" id="precio" value=""><br>
        <label for="espacio">Espacio</label>
        <input type="text" id="espacio" name="espacio" value=""><br>
        <input type="button" name="" value="Guardar" onclick="llamarregistrar('insertarHabit.php')">
    </form>
</div>