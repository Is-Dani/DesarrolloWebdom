
<?php 

Class Tecno{
    private $cadena='';

    public function __construct($cadena)
    {
        $this->cadena=$cadena;
    }


    public function dibujar(){

        echo $this->cadena;
        echo '<br/>';
        for ($i=1; $i < strlen($this->cadena)  ; $i++) { 
            echo substr($this->cadena, $i, 1);
            for ($j=0; $j <strlen($this->cadena)-2 ; $j++) { 
                echo '&nbsp';  
                echo '&nbsp';  
            }
            echo substr($this->cadena, -$i, 1);
            echo '<br/>';
        }
        echo strrev($this->cadena);
    }
}
?>