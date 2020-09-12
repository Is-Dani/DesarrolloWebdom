<?php 
    session_start();
    include("../back/conexion.php");
    $nro = $_POST['nro'];
    $ingreso = $_POST['ingreso'];
    $salida = $_POST['salida'];
    $sql2 = "SELECT * from habitacion where nro = '$nro'";
    $resultado2 = $con->query($sql2);
    $fila = $resultado2->fetch_assoc();
    echo $idhabitacion = $fila['id'];
    echo $precio = $fila['precio'];
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
    $correo = $_SESSION['correo'];
    $sql="insert into reservas(fechaingreso, fechasalida, idhabitacion, precio, pagada, nombre, apellidos, correoelectronico, confirmado) values('$ingreso', '$salida', '$idhabitacion', '$precio', '0', '$nombre', '$apellido', '$correo', 'NO')";

    $resultado=$con->query($sql);

?>

