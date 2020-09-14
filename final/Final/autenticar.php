<?php
    session_start();
    include 'conexion.php';
    $correo = $_POST['correo'];
    $password = sha1($_POST['password']);
    $sql = "SELECT * from usuarios where correo='$correo' and password ='$password'";
    $resultado = $con->query($sql);
    if($fila = $resultado->fetch_assoc()){
        $_SESSION['correo']=$fila['correo'];
        $_SESSION['nombre']=$fila['nombrecompleto'];
        header("Location: index.php");
    }else{
        echo'Datos de autenticacion equivocados';
    }

?>