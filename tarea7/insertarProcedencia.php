<?php include 'conexion.php';
$codPais = $_POST['codPais'];
$proc = $_POST['proc'];

$sql = "insert into procedencia (procedencia, codigoPais) values ('$codPais','$proc')";
$resultado = $con ->query($sql);
if($resultado == true){
    echo 'se inserto correctamente'; 
}
else 
    echo 'error inesperado, intentelo de nuevo';
?>
<meta http-equiv="refresh" content="4;URL=listarProcedencia.php"> 