<?php
    $num=$_GET['num'];
    if($num%2==0){
        echo'El numero '.$num.' es: PAR';
    }else{
        echo'El numero '.$num.' es: IMPAR';
    }
?>