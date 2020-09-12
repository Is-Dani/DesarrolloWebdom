<?php include("conexion.php");
$estado = $_POST['estado'];
$id = $_POST['id'];
if($estado == 'SI'){
    $sql = "UPDATE reservas set estado='NO' WHERE id = $id" ; 
}
else {
    if($estado == 'SI'){
        $sql = "UPDATE reservas set estado='SI' WHERE id = $id" ; 
    }
}
$respuesta = $con->query($sql);
?>
