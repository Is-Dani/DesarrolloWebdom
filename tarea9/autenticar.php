<?php session_start();
    $correo=$_POST['correo'];
    $password=sha1($_POST['password']);
    include('conexion.php');
    $sql="select * from usuarios where correo='$correo' and password='$password'";
    $resultado=$con->query($sql);
    if ($fila=$resultado->fetch_assoc()){
 	   echo "Es  usuario correcto";
      $_SESSION['correo']=$correo;
      $_SESSION['rol']=$fila['idrol'];
      $_SESSION['descripcion']=$fila['descripcion'];
      $_SESSION['nombre']=$fila['nombre'];
      header("Location: habitaciones.php");
    }
    else{
       echo "Usuario o Contraseña novalidos"; 
?>
   <meta http-equiv="refresh" content="3;URL=login.php">   
<?php 
   }
?>
 	
