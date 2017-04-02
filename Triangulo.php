<?php
include_once "ej15p4.php";
/**
* 
*/
class Triangulo extends FigurasGeometricas
{
	

	public function __construct($_sup, $_alt)
	{
		# code...
		parent::__construct($sup,$alt);
		echo "construyendo triangulo<";
		echo "<br>";
		$this->CalcularDatos($sup,$alt);
		//$this->_superficie= $_sup;
		//$this->_perimetro= $_alt;
		echo "El triangulo tiene $this->_superficie <br>";
		echo $this->_superficie;
	}
	public function Dibujar()
	{
		# code...

		echo "Dibujando Triangulo <br>";
		$base = $this->getSuperficie();
		$altura = $this->_perimetro;
		echo "La base es $base";
		echo $base;
		for($i=0;$i<$base;$i++){
			echo"*";
			echo"<br>";
		}

	}
	public function CalcularDatos($p1,$p2){
		echo "Calculando datos triangulo <br>";

		$this->setSuperficie($_p1);
		$this->_perimetro= $_p2;
	}
	
	public function ToString(){
		echo "Estoy implementando tostring desde la clase triangulo";
	}




}


?>