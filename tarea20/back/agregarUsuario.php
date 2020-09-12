<?php include("conexion.php");
$correo = $_POST['correo'];
$password = sha1( $_POST['password']);
$nombres = $_POST['nombre'];
$apellidos = $_POST['apellido'];
$rol = $_POST['rol'];
$sql="insert into usuarios( correo, password, nombres, apellidos,idrol) values( '$correo', '$password', '$nombres', '$apellidos','$rol')";
$resultado=$con->query($sql);
if ($resultado)
	include('listarUsuario.php');
else
	echo "hubo un error";
?>
