<?php
    class _examen{
        private $n,$a,$b,$c,$cadena;
        public function __construct($n,$a,$b,$c,$cadena){
            $this->n=$n;
            $this->a=$a;
            $this->b=$b;
            $this->c=$c;
            $this->cadena=$cadena;
        }
        public function Calcularfibonaci(){
            $f1=0;
            $f2=1;
            $f3=0;
            echo '<p>-El fibonaci de <strong>'.$this->n.'</strong> es</p>'. 
            $f1 . ', '. $f2;
            for($i=1; $i<=$this->n-2; $i++){
                $f3 = $f2+$f1;
                echo ', '.$f3;
                $f1 = $f2;
                $f2 = $f3;
            }
        }
        public function calcularmayor(){
                if($this->b<$this->a && $this->c<$this->a){
                    echo 'el mayor es: '.$this->a;
                }else{
                    if($this->b<$this->c && $this->a<$this->c){
                        echo 'el mayor es: '.$this->c;
                    }else{
                        echo 'el mayor es: '. $this->b;
                    }
                }
        }
        public function piramide(){
            $mitad=strlen($this->cadena)/2;
            $con = 1;
            echo '<P>-la forma piramidal de la  palabra <strong>'.$this->cadena.'</strong> es</p>';
            for($i=0; $i<=strlen($this->cadena)/2; $i++){
                echo str_repeat("&nbsp", 10);
                echo str_repeat("&nbsp ", $mitad);
                echo substr($this->cadena, $mitad , $con);
                $mitad--;
                $con+=2;
                echo '</br>';
            }
        }
    }
?>
