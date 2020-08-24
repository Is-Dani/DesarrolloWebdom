<?php
session_start();
$correo = $_SESSION['usuario'];
include("conexion.php");
$id = $_POST['id'];
$confirmado = 'SI';
$sql = "UPDATE reservas set confirmado = '$confirmado' where id='$id'";
$resultado=$con->query($sql);
if ($resultado)
    echo'se confirmo con exito';
else
	echo "hubo un error";
?>
<input type="button" value="regresar" onclick="cargar('reservas.php')">   

