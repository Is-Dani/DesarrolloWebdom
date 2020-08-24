<?php
session_start();
$correo = $_SESSION['usuario'];
include("conexion.php");
$id = $_POST['id'];

$sql = "SELECT * from habitacion where id='$id'";
$resultado = $con->query($sql);
$fila = $resultado->fetch_assoc();
$precio = $fila['precio'];

$sql1 = "SELECT * from usuarios where correo='$correo'";
$resultado1 = $con->query($sql1);
$fila1 = $resultado1->fetch_assoc();
$idusuario = $fila1['id'];
$nombre = $fila1['nombres'];
$apellido = $fila1['apellidos'];
$confirmado = 'NO';

$sql2 = "INSERT INTO reservas (idhabitacion, precio, nombre, apellidos, correoelectronico, confirmado) values ('$id', '$precio', '$nombre', '$apellido', '$correo', '$confirmado')";
$resultado2=$con->query($sql2);
if ($resultado2)
    echo'se reservo con exito';
else
	echo "hubo un error";
?>
<input type="button" value="regresar" onclick="cargar('habitaciones.php')">   

