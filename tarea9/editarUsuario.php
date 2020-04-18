<?php include("conexion.php");
$correo = $_POST['correo'];
$password = $_POST['password'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$idrol = $_POST['idrol'];
$sql = "UPDATE usuarios set correo='$correo',password='$password',nombres=$nombres,apellidos='$apellidos',idrol='$idrol' where id='$id' ";

$resultado=$con->query($sql);
if ($resultado)
	echo "se edito con exito";
else
	echo "hubo un error";
?>
<meta http-equiv="refresh" content="4;URL=listarUsuario.php">   

