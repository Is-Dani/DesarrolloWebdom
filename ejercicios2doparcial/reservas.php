<?php
session_start();
$correo = $_SESSION['usuario'];
include("conexion.php");

$sql = "SELECT * from habitacion inner join tipohabitaciones on habitacion.idtipohabitacion = tipohabitaciones.id inner join reservas on habitacion.id = reservas.idhabitacion" ;
$resultado = $con->query($sql);

?>
<div class="pd">
    <h5>RESERVAS</h5>
    <table border="1">
        <tr>
            <th>reserva</th>
            <th>Nombre Cliente</th>
            <th>Nro Habitacion</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Confirmado</th>
            <th>operaciones</th>
        </tr>
            <?php
            while($fila = $resultado->fetch_assoc()){
        echo'
        <tr>
                <td>'.$fila['id'].'</td>
                <td>'.$fila['nombre'].'</td>
                <td>'.$fila['nro'].'</td>
                <td>'.$fila['descripcion'].'</td>
                <td>'.$fila['precio'].'</td>
                <td>'.$fila['confirmado'].'</td>
                <td><a href="javascript:ConfirmadoSI('.$fila["id"].')"class="txt-rojo">Confirmar</a></td>
                <td><a href="javascript:eliminarReserva('.$fila["id"].')" class="txt-verde">Eliminar</a></td>
        </tr>
        ';
                
            }
            
            ?>
    </table>
</div>

