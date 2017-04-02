<?php
require "Triangulo.php";
include "Rectangulo.php";

$miTriangulo = new Triangulo(10,15); //creo un objeto triangulo
$miTriangulo->Dibujar();
echo "<br>";
echo "estoy en el archivo ej 15";
echo "<br>";
$miTriangulo->ToString();
//$miTriangulo->CalcularDatos();
$miFigura2=new Rectangulo(25,40);
?>