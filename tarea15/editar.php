<?php include("conexion.php");
$nombre= $_POST['nombre'];
$apelldio= $_POST['apellido'];
$id=$_POST['id'];

/// registrar en la bd

$sql="UPDATE person SET nombre='$nombre', apellido = '$apelldio' WHERE id='$id'";
//echo $sql;
$resultado=$con->query($sql);
if ($resultado)
    {
      include('listar.php');
    }
else
	echo "hubo un error";
?>