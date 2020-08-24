<?php
    include 'conexion.php';
    session_start();
    $correo = $_POST['correo'];
    $password = sha1($_POST['password']);
    $sql = "SELECT * from usuarios where correo = '$correo' and password = '$password'";
    $resultado=$con->query($sql);
    if ($fila=$resultado->fetch_assoc()){
        echo'usuario correcto';
        $_SESSION['usuario'] = $correo;
        $_SESSION['nivel'] = $fila['idrol'];
?>
        <meta http-equiv="refresh" content="3;URL=index.php">   
<?php 
    }else{
       echo "Usuario o Contraseña novalidos"; 
?>
   <meta http-equiv="refresh" content="3;URL=login.php">   
<?php 
   }
?>
