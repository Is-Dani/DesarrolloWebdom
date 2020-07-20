<?php
    if(isset($_COOKIE['contador'])){
        if($_COOKIE['contador']>=5){
            echo'
            <label for="si">Muy buena</label>
            <input type="radio" name="opcion" id="si" ><br><br>
            <label for="talves">Falta mejorar</label>
            <input type="radio" name="opcion" id="talves" ><br><br>
            <label for="no">Pesimo</label>
            <input type="radio" name="opcion" id="no" ><br><br>
            <input type="submit" value="enviar">';
            $mensaje='Indique si le gusta el sitio<br>';
        }else{
            setcookie('contador', $_COOKIE['contador']+1,time()+365*24*60*60);
            $mensaje = 'gracias por ya ser un visitante frecuente usted visito este sitio:'.$_COOKIE['contador'].'<br>';
        }
    }else{
        setcookie('contador',1,time()+365*24*60*60);
        $mensaje='bienvenido';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 20</title>
</head>
<body>
    <?php echo $mensaje;
    ?>
</body>
</html>
