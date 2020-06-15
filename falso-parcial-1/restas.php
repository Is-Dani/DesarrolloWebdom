<?php 
    for($i=1; $i<=$_COOKIE['cookie']; $i++){
        $resta = $_POST['i'.$i]- $_POST['j'.$i];
            echo '<input type="text" value = "'.$resta.'"style="width: 50px; height: 50px; text-aling:center;">';
    }
?>
