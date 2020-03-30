<?php 
session_start();
$n = $_SESSION['sesion'];
    for($i=1; $i<=$n; $i++){
        $resta = $_POST['i'.$i]- $_POST['j'.$i];
            echo '<input type="text" value = "'.$resta.'"style="width: 50px; height: 50px; text-aling:center;">';
    }
?>
