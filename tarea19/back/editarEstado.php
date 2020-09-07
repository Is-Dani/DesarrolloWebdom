<?php include("conexion.php");
$estado = $_POST['estado'];
$id = $_POST['id'];
if($estado == 1){
    $sql = "UPDATE usuarios set estado=0 WHERE id = $id" ; 
}
else{
    $sql = "UPDATE usuarios set estado=1 WHERE id = $id" ; 
}
$respuesta = $con->query($sql);
// echo $respuesta? header("Location: listarUsuario.php"):"todo mal";
?>
