<!--4.	Elaborar un programa en php denominado pregunta4.php que implemente la clase cuadrado con su propiedad cadena la cual es iniciada en el constructor con un valor y el método dibujar que imprime con la cadena un cuadrado. luego instancie el ob1 con el valor Tecno y llame a su método dibujar, instancie el ob2 con el valor Ciencias y llamea su método dibujar.   Para la palabra Tecno debe mostrar lo siguiente en la página:
Tecno
e       n
c       c
n       e
onceT
--->
<?php
    require_once 'Tecno.php';

    $tecno = new Tecno('Tecno');

    echo $tecno->dibujar();
    
?>