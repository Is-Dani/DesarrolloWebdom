<?php
    $fila=$_GET['fila'];
    $col=$_GET['col'];
    echo'<table border=1>';

    for ($i=0; $i <= $fila; $i++) { 
        echo'<tr>';
        for ($j=0; $j <= $col; $j++) { 
            $m=$i*$j;
            if($m==0){
                $m=$i+$j;
                echo'<td style="background:#ccc"><b>'.$m.'<b>';
                echo'</td>';
            }else{
                echo'<td>'.$m;
                echo'</td>';
            }
            
        }
        echo'</tr>';
    }
    echo'</table>';
?>