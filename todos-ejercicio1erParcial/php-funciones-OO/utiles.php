<?php
    class _utiles{
        private $cadena;
        public function __construct($cadena){
            $this->cadena=$cadena;
        }
        public function aumentarguiones($n){
            for ($i=0; $i < strlen($this->cadena); $i++) { 
                echo $this->cadena[$i];
                if($i<strlen($this->cadena)-1){
                    for ($j=0; $j < 1; $j++) { 
                        echo str_repeat('-',$n);
                    }
                }
               
            }
        }
    }
?>