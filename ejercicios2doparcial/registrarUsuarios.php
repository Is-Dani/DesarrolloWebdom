<?php
    include 'conexion.php';
    $correo = $_POST['correo'];
    $password =sha1( $_POST['password']);
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $sql = "INSERT into usuarios (correo, password, nombres, apellidos) values ('$correo', '$password', '$nombre', '$apellido')";
    $resultado=$con->query($sql);
    if ($resultado){
        include('login.php');
    }else
	    echo "hubo un error";
?>