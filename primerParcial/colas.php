<?php 
class Cola
{
	private $elementos=array();
    private $tope;
    private $tamano;
    
	function __construct($tamano)
	{
        $this->tope=0;
        $this->tamano = $tamano;
        $this->elementos=array($tamano);
        
    }
    
	public function insertar($elemento)
	{
		$this->elementos[$this->tope]=$elemento;
		$this->tope++;
	}
	public function eliminar()
	{
		if ($this->tope==0)
			echo "la pila esta vacia";
		else	
            {$this->tope--;
                
				return array_shift($this->elementos);
			}
	}
	public function mostrar()
	{
		for ($i=0;$i<$this->tope;$i++)
			echo $this->elementos[$i]."<br/>";
	}
}