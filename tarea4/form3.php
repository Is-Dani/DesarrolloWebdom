<?php 
require_once "ejercicio3.php";
$estante = new Estante();

$estante->insertarLibro('2','libro3');
$estante->insertarLibro('2','libro4');

$estante->mostrar('2'); 
echo'<br>';
$estante->eliminarLibro('2');
echo'<br>';
$estante->mostrar('2');

?>