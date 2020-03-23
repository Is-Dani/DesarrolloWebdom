
    <?php 
        $n = $_POST['n'];
        $m = $_POST['m'];
        if($n % $m == 0){
            echo $n.' es multiplo de: '.$m.'<br><img src="esmultiplo.jpg" alt="">';
        }
        else
            echo $n.' no es multiplo de: '.$m.'<br><img src="noesmultiplo.jpg" alt="">';
    ?>

