<?php include("conexion.php");
$nro = $_POST['nro'];
$idhabitacion = $_POST['tipohabitacion'];
$banoprivado = $_POST['bano'];
$espacio = $_POST['espacio'];
$precio = $_POST['precio'];
$sql="insert into habitacion( nro, idtipohabitacion, banoprivado, espacio,precio) values( '$nro', '$idhabitacion', '$banoprivado', '$espacio','$precio')";
$resultado=$con->query($sql);
if ($resultado)
    echo'se inserto con exito';
else
	echo "hubo un error";
?>
<input type="button" value="regresar" onclick="cargar('habitaciones.php')">   
