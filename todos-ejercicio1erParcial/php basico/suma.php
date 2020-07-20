<?php
    $num1=$_GET['num1'];
    $num2=$_GET['num2'];
    $suma=$num1+$num2;
    echo' 
        <table style="background: green;text-align: center; color:white;" border=1>
            <col width="100px">
            <col width="100px">
            <col width="100px">
            <col width="100px">
            <col width="100px">
                <tr>
                    <td>'.$num1.'</td>
                    <td>+</td>
                    <td>'.$num2.'</td>
                    <td>=</td>
                    <td>'.$suma.'</td>
                </tr>
        </table>
    ';
