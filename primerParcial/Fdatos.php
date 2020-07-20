
<span>NOMBRE:</span> <span>APELLIDO:</span> <span>SEXO:</span> <span>MESA</span>


<form action="Finsertar.php" method="POST">
<?php

$n = $_POST['pacientes'];

    echo'<input type="hidden" name="cantidad" value="'.$n.'">';
    
for($i=0;$i<$n;$i++){

    echo'<input type="text" name="nombre'.$i.'">
    
    <input type="text" name="apellido'.$i.'">
    <input type="radio" name="sexo'.$i.'" value="Masculido"> Masculino
    <input type="radio" name="sexo'.$i.'" value="Femenino"> Femenino
    
    <input type="number" name="mesa'.$i.'"><br>
    ';
    

}
echo'<input type="submit" value="Enviar">';
?>

</form>

<style>
    span{
        margin-left: 90px;
    }
</style>