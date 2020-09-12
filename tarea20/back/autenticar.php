<?php
session_start();
$correo = $_POST['correo'];
$password = sha1($_POST['password']);
include('conexion.php');
$sql = "select * from usuarios where correo='$correo' and password='$password'";
$resultado = $con->query($sql);
if ($fila = $resultado->fetch_assoc()) {
   $_SESSION['correo'] = $correo;
   $_SESSION['rol'] = $fila['idrol'];
   $_SESSION['nombre'] = $fila['nombres'];
   $_SESSION['apellido'] = $fila['apellidos'];
   if($_SESSION['rol'] == 0){
      header("Location: ../hotel/index.php ");
   }else{
      header("Location: header.php");
   }
} else {
   echo "Usuario o Contraseña novalidos";
?>
   <meta http-equiv="refresh" content="3;URL=login.php">
<?php
}
?>