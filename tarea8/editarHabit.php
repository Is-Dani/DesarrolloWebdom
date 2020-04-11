<?php include("conexion.php");
$id = $_POST['id'];
$nro = $_POST['nro'];
$idhabitacion = $_POST['tipohabitacion'];
$banoprivado = $_POST['banoprivado'];
$espacio = $_POST['espacio'];
$precio = $_POST['precio'];
$sql = "UPDATE habitacion set nro='$nro',idtipohabitacion='$idhabitacion',banoprivado=$banoprivado,espacio='$espacio',precio='$precio' where id='$id' ";

$resultado=$con->query($sql);
if ($resultado)
	echo "se edito con exito";
else
	echo "hubo un error";
?>
<meta http-equiv="refresh" content="4;URL=listarHabit.php">   

