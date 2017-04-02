
<?php	

echo "Ejercicio 15";
echo "<br>";
//esta es la clase padre
abstract class FigurasGeometricas {

//Atributos de clase padre que deberian heredar los hijos
protected $_superficie; 
protected $_perimetro;
protected $_color;




public function __construct($_sup,$_per){
	echo "Constructor padre";
	echo "<br>";


}
public function setSuperficie($sup){
	$this->_superficie=$sup;
}
public function getSuperficie(){
	return $this->_superficie;
}
public function setColor($color){

	$this->_color= $color;
}
public function getColor()
{
	return $this->_color;
}
abstract public function Dibujar();
abstract protected function CalcularDatos($sup2,$per2);


function ToString(){ 
echo "Estoy dentro de la funcion virtual de FG";
}

}
?>