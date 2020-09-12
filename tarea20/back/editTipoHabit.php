<?php include("conexion.php");
$id = $_POST['id'];
$descripcion = $_POST['descripcion'];
$nrocamas = $_POST['nrocamas'];
$sql = "UPDATE tipohabitaciones set descripcion='$descripcion',nrocamas='$nrocamas' where id='$id' ";

$resultado=$con->query($sql);
?>

