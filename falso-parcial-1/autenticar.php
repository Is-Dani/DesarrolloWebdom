<?php
    session_start();
    include 'conexion.php';
    $correo = $_POST['correo'];
    $password = sha1($_POST['password']);
    $sql = "SELECT * from usuarios where correo='$correo' and password ='$password'";
    $resultado = $con->query($sql);
    if($fila = $resultado->fetch_assoc()){
        $_SESSION['nombres']=$fila['nombres'];
        $_SESSION['apellidos']=$fila['apellidos'];
        $_SESSION['nivel']=$fila['nivel'];
        header("Location: inicio.php");
    }else{
        echo'Datos de autenticacion equivocados';
    }

?>