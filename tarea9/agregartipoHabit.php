<?php include("conexion.php");
$descripcion = $_POST['descripcion'];
$nrocamas = $_POST['nrocamas'];
$sql = "INSERT INTO tipohabitaciones(descripcion, nrocamas) values ('$descripcion', '$nrocamas')";
$resultado=$con->query($sql);
if ($resultado)
	echo "se registro con exito";
else
	echo "hubo un error";
?>
<meta http-equiv="refresh" content="4;URL=habitaciones.php"> 
