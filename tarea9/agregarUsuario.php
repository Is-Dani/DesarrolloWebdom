<?php include("conexion.php");
$correo = $_POST['correo'];
$password = $_POST['password'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$idrol = $_POST['idrol'];
$sql="insert into usuarios( correo, password, nombres, apellidos, idrol) values( '$correo', '$password', '$nombres', '$apellidos','$idrol')";
$resultado=$con->query($sql);
if ($resultado)
	echo "se registro con exito";
else
	echo "hubo un error";
?>
<meta http-equiv="refresh" content="4;URL=listarUsuario.php"> 
