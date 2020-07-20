<?php
    session_start();
    include("colas.php");
    $n=$_POST['tamano'];
    $cola = new  cola($n);
    $_SESSION['n']=$n;
    header("Location:menu.php")
?>
