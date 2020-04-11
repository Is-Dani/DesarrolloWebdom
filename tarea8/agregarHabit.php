<?php include("conexion.php");
$nro = $_POST['nro'];
$idhabitacion = $_POST['tipohabitacion'];
$banoprivado = $_POST['banoprivado'];
$espacio = $_POST['espacio'];
$precio = $_POST['precio'];
$sql="insert into habitacion(nro, idtipohabitacion, banoprivado, espacio, precio) values('$nro', '$idhabitacion', '$banoprivado', '$espacio', '$precio')";

$resultado=$con->query($sql);
if ($resultado)
	echo "se registro con exito";
else
	echo "hubo un error";
?>
<meta http-equiv="refresh" content="4;URL=habitaciones.php"> 
