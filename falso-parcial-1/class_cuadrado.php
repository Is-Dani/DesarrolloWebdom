<?php
    class _cuadrado{
        private $cadena='';
        public function __construct($cadena){
            $this->cadena=$cadena;
        }
        public function dibujar(){
            echo $this->cadena.'<br>';
            for($i=2; $i<strlen($this->cadena); $i++){
                echo substr($this->cadena,$i-1,1);
                echo str_repeat('&nbsp',(strlen($this->cadena)));
                echo substr($this->cadena,-$i,1).'<br>';
            }
            echo strrev($this->cadena);
        }

    }
?>