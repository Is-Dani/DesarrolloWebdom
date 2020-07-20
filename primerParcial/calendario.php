<?php
    $mes=$_POST['mes'];
    $anio=$_POST['anio'];
    echo '<div class="centro"><strong >Año: '.$anio.'</strong><br>';
    echo'<strong > Mes: '.$mes.'</strong><div>';
    echo'<table border=1>';
    $numdias = cal_days_in_month(CAL_GREGORIAN, $mes, $anio);
    $dia1=jddayofweek ( cal_to_jd(CAL_GREGORIAN, 1,$mes, $anio) , 0 );

    $dias=[1,2,3,4,5,6,0];
    $nomdia = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"); 
    echo $dia1;
    echo'
    <tr>
    <td>lunes</td>
    <td>martes</td>
    <td>miercoles</td>
    <td>jueves</td>
    <td>viernes</td>
    <td>sabado</td>
    <td>domingo</td>
    </tr>
    <tr>';
    
    
    for ($i=1; $i <= $numdias; $i++) { 
            echo '<td>'.$i.'</td>';
            if($i%7==0){
                echo '<tr><tr>';
            }
        
    }
 
echo'</tr></table>';
?>
<style>
    .centro{
        text-align: center;
        margin-top: 100px;
    }
</style>
 

    
    



  
