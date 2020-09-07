<?php include("conexion.php");
$descripcion = $_POST['descripcion'];
$nrocamas = $_POST['nrocamas'];
$sql = "INSERT INTO tipohabitaciones(descripcion, nrocamas) values ('$descripcion', '$nrocamas')";
$resultado=$con->query($sql);
?>
