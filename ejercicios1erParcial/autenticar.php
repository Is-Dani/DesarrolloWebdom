<?php
    session_start();
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    if($usuario=='admin' && $password=='admin'){
        $_SESSION['usuario'] = 'admin';
    }else{
        $_SESSION['usuario']='usuario';
    }
    echo $_SESSION['usuario'];
?>
<meta http-equiv="refresh" content="4; url=acceso.php">