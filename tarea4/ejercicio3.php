<!-- 3.	Realizar un programa en php que implemente la clase estante 3 filas, que tiene los siguientes Propiedades
Fila1 = arreglo
Fila2=arreglo
Fila3=arreglo
Tope1, Tope2, Top3: entero
Métodos
insertarLibro(Fila) inserta un elemento en el estante en determinada fila
EliminaLibro(Fila) eliminar el último elemento en el estante en determinada fila

mostrar(fila) muestra los elementos de la fila indicada -->


<?php 

class Estante{
    private $fila1 = array();
    private $fila2 = array();
    private $fila3 = array();
    
    private $tope1 = 0;
    private $tope2 = 0;
    private $tope3 = 0;


    public  function insertarLibro($fila, $elemento){
        switch($fila){
            case '1':
                $this->fila1[$this->tope1]=$elemento;
                $this->tope1++;
            break;
            case '2':
                $this->fila2[$this->tope2]=$elemento;
                $this->tope2++;
            break;
            case '3':
                $this->fila3[$this->tope3]=$elemento;
                $this->tope3++;
            break;
        }

    }

    public function eliminarLibro($fila){
        switch($fila){
            case '1':
                if ($this->tope1==0)
                echo "el estante esta vacio";
            else	
                {
                    return array_pop($this->fila1);
                } 
            break;
            case '2':
                if ($this->tope2==0)
                echo "el estante esta vacio";
            else	
                {
                    return array_pop($this->fila2);
                } 
            break;
            case '3':
                if ($this->tope3==0)
                echo "El estante esta vacio";
            else	
                {
                    return array_pop($this->fila3);
                } 
            break;
        }
       
    }

    public function mostrar($fila){
        switch($fila){
            case '1':
                foreach($this->fila1 as $item){
                    echo $item;
                }
            break;
            case '2':
                foreach($this->fila2 as $item){
                    echo $item;
                }
            break;
            case '3':
                foreach($this->fila3 as $item){
                    echo $item;
                }
            break;            
        }
    }
}

?>