<?php

$con=new mysqli("localhost","root","","bd_parcial");
if ($con->connect_error)
 die ("conexion fallada".$con->connect_error);
 

$cantidad =  $_POST['cantidad'];


$nombres=[];
$apellidos=[];
$sexos=[];
$mesas=[];


for ($i=0; $i < $cantidad ; $i++) { 
    $nombres[$i]= ($_POST["nombre".$i]);
    $apellidos[$i]= ($_POST["apellido".$i]);
    $sexos[$i]= ($_POST["sexo".$i]);
    $mesas[$i]= ($_POST["mesa".$i]);

}


for ($i=0; $i < $cantidad; $i++) { 
    $sql="INSERT INTO 'pacientes' ('nombres', 'apellidos', 'sexo', 'mesa') VALUES ('$nombres[$i]', '$apellidos[$i]', '$sexos[$i]', '$mesas[$i]')";
    $resultado=$con->query($sql);    
}

if($resultado){
    header('Location:Flistar.php');
}


?>