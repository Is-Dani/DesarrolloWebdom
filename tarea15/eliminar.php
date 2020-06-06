<?php include("conexion.php");
$id=$_POST["id"];

$sql="DELETE FROM person WHERE id = '$id'";
//echo $sql;
$resultado=$con->query($sql);
if ($resultado)
    {
            
      include('listar.php');
    }
else
	echo "hubo un error";
?>