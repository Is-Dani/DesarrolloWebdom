<?php include("conexion.php");
$id = $_POST['id'];
$correo = $_POST['correo'];
$password = sha1($_POST['password']) ;
$nombres = $_POST['nombre'];
$apellidos = $_POST['apellido'];
$rol = $_POST['rol'];
$sql = "UPDATE usuarios set correo='$correo',password='$password',nombres='$nombres',apellidos='$apellidos',idrol='$rol' where id='$id' ";
$resultado=$con->query($sql);
?>

