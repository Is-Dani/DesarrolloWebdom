<?php include("conexion.php");
    session_start();
    $usuario = $_POST['usuario'];
    $password = sha1($_POST['password']);
    $sql ="SELECT * FROM usuarios WHERE correo = '$usuario' and password ='$password'";
    
    $resultado=$con->query($sql);
    
    if ($fila=$resultado->fetch_assoc()){
        // echo $fila['nombres'];
        echo "Es  usuario correcto";
        $_SESSION['nombre']= $fila['nombres'];
        $_SESSION['apellido']= $fila['apellidos'];
        $_SESSION['nivel']=$fila['nivel'];

        header("Location: inicio.php");
       }
       else{
          echo 'Datos de Autenticación Equivocados';}
?>