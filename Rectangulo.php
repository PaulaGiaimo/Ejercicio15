<?php
include_once "ej15p4.php";
class Rectangulo extends FigurasGeometricas{


public function __construct(){
	echo "Soy un rectangulo";

}

	public function Dibujar()
	{
		# code...
		echo "Dibujando Rectangulo";

	}
	public function CalcularDatos($p1,$p2){
		echo "Calculando datos rectangulo";
	}
	public function ToString(){
		echo "Estoy implementando tostring desde la clase rectangulo";
	}


}


?>