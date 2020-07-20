<?php
    $fila=$_GET['fila'];
    $col=$_GET['col'];
    $a=0;$b=1;$c=2;
    echo '<table border=1; >';
    for ($i=0; $i<$fila ; $i++) { 
        echo'<col width="100px">'; 
        if($i==$a){
            echo'<col width="100px">'; 
            echo'<tr style="background:red">';
            for ($j=0; $j<$col ; $j++) { 
                echo'<td style="height:30px"></td>';
            }
            echo'</tr>';
        $a=$a+3;
        }
        if($i==$b){
            echo'<col width="100px">'; 
            echo'<tr style="background:yellow">';
            for ($j=0; $j<$col ; $j++) { 
                echo'<td style="height:30px"></td>';
            }
            echo'</tr>';
        $b=$b+3;

        }
        if($i==$c){
            echo'<col width="100px">'; 
            echo'<tr style="background:green">';
            for ($j=0; $j<$col ; $j++) { 
                echo'<td style="height:30px"></td>';
            }
            echo'</tr>';
        $c=$c+3;
        }
    }
    echo '</table>';
?>

    
        
    

