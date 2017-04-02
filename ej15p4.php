
<?php	

echo "Ejercicio 15";
echo "<br>";
//esta es la clase padre
abstract class FigurasGeometricas {

//Atributos de clase padre que deberian heredar los hijos
protected $_superficie; 
protected $_perimetro;
protected $_color;


//constructor que se va a usar solo en los hijos porque esta clase es abstracta y no me deja 
//instanciarla
//le paso los parametros y adentro implementé la funcion calcular datos qe lo que haria
//es inciar los atributos.. aca tengo la duda si pueda instanciarlos como atributos propios de los hijos
//porque al nombrar el constructor en la clase hija creo que lo estoy
//sobrecargando y no se si anule al padre...
//Fijate en la clase rectangulo le estoy poniendo solo un string para probar eso
//y en esta puse un string para ver si llega a entrar

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