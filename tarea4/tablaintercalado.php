<?php
$filas = $_GET['filas'];
$columnas = $_GET['columnas'];
$flag = -1;
$flag2 = -1;
?>
<table class="borde">
    <?php
    for ($i = 1; $i <= $filas; $i++) {
        
        $flag++;
        $flag2++;
        echo '<tr>';
           
            for ($j = 1; $j <= $columnas; $j++) {
                if($j%2==1){
                if ($flag == 0)
                    echo '<td class="tamano" style="background:red;"  ></td>';
                else {
                    if ($flag == 1)  echo '<td class="tamano" style="background:yellow;"  ></td>';
                    else {
                        echo '<td class="tamano" style="background:green;"  ></td>';
                        $flag = -1;
                    }
                }
            }else{
                if ($flag2 == 0)
                    echo '<td class="tamano" style="background:white;"  ></td>';
                else {
                     echo '<td class="tamano" style="background:red;"  ></td>';
                     $flag2 = -1;
                }
            }
        }
        echo '</tr>';
        
    
}
    ?>
</table>
<style>
    .tamano {
        width: 150px;
        height: 30px;
    }
    .borde{
        border: 1px solid black;
    }
</style>