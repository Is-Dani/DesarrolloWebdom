<?php include("conexion.php");
$id = $_POST['id'];
$descripcion = $_POST['descripcion'];
$nrocamas = $_POST['nrocamas'];
$sql = "UPDATE tipohabitaciones set descripcion='$descripcion',nrocamas='$nrocamas' where id='$id' ";

$resultado=$con->query($sql);
if ($resultado)
	echo "se edito con exito";
else
	echo "hubo un error";
?>
<meta http-equiv="refresh" content="4;URL=listarHabit.php">   

