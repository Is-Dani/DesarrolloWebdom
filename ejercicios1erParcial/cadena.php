<?php
    $cadena=$_POST['cadena'];
    $cadena=strtolower($cadena);
    $script='script';
    $posicion=stripos($cadena,$script);
    if($posicion==false){
        echo'no tiene la palabra script';
    }else{
        echo'si tiene la palabra script<br>';
        echo str_replace($script,"",$cadena);
    }
?>