<div class="container my-5">
    <form>
        <?php
        $n = $_POST['n'];
        for ($i = 1; $i <= $n; $i++) {
            echo '  <div class="form-group">
                <input type="text" class="form-control" id="numero'.$i.'" style="width: 50px; height: 50px;" onblur="resul('.$i.')">
                </div>
            ';
        }
        echo '<div id="suma"></div>';
        ?>

    </form >
</div>
