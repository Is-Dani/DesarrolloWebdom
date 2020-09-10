<?php
    for($i=0; $i<$_COOKIE['cookie']; $i++){
        $resta = $_POST['i'.$i]-$_POST['j'.$i];
        echo'<input type="number" value="'.$resta.'">';
    }
?>
