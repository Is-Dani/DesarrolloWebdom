<?php
    require_once('utiles.php');
    $cadena=$_GET['cadena'];
    $n=$_GET['n'];
    $utiles = new _utiles($cadena);
    $utiles->aumentarguiones($n);
?>