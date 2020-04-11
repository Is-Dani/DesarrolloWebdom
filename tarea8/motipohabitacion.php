<?php
    include("conexion.php");
    $sql = "SELECT * FROM tipohabitaciones";
    $resultado = $con->query($sql);
?>