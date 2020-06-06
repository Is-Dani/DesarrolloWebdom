<?php include("conexion.php");
    $idLugar = $_GET['idLugar'];

    $sql = "SELECT * FROM lugares WHERE iddepartamento = '$idLugar'";
    $resultado = $con->query($sql);
    while($fila = $resultado->fetch_assoc()){
        $datos[] = array(
            'id' => $fila['id'],
            'iddepartamento' => $fila['iddepartamento'],
            'nombre'=> $fila['nombre']           
        );
    }
    // echo  $fila["nombre"];
    echo json_encode($datos);
    
?>