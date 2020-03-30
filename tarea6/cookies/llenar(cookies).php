
<form action="restas(cookies).php" method="POST">
<?php 
    $n = $_POST['n'];
    for($i=1; $i<=$n; $i++){
        echo'
                <input type="text" name="i'.$i.'" style="width: 50px; height: 50px;">
            ';
    }
    echo'</br>';
    for($j=1; $j<=$n; $j++){
        echo'
            <input type="text" name="j'.$j.'" style="width: 50px; height: 50px;">
        ';
    }
    echo '<br><input type="submit">';

    setcookie('cookie',$n,time()+3600);
?>


</form>

