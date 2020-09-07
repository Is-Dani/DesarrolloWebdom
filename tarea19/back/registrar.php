<?php include("conexion.php");
$correo = $_POST['correoReg'];
$password = sha1( $_POST['passwordReg']);
$nombres = $_POST['nombreReg'];
$apellidos = $_POST['apellidoReg'];
$sql="insert into usuarios( correo, password, nombres, apellidos,idrol) values( '$correo', '$password', '$nombres', '$apellidos','0')";
$resultado=$con->query($sql);
if ($resultado)
	include('login.php');
else
	echo "hubo un error";
?>
