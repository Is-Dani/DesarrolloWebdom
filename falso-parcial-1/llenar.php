    <form action="restas.php" method="post">
        <?php
        $n = $_POST['num'];
        setcookie('cookie',$n);
        for ($i = 0; $i < $n; $i++) {
            echo '<input type="text" name="i' . $i . '">';
        }
        echo '<br><br>';
        for ($j = 0; $j < $n; $j++) {
            echo '<input type="text" name="j'. $j .'">';
        }
    echo'<br><br><input type="submit" value="calcular">';
        ?>
    </form>