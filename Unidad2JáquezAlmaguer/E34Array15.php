<?php
/* CBTIS 89
Programa que convierte los datos de un arreglo en una cadena de texto, y de forma contraria , es decir convierte una cadena de texto a elementos dentro de un arreglo.
Jaquez Almaguer
3ºA Programación matutino
*/
$arrayDatos = [" Karina "," Rosales "," Orozco "];

$string = implode(" ",$arrayDatos);
echo "Cadena de texto <br>";
echo $string;
echo "<br>","<br>";

$cadena = "Tercero de programción matutino";
$array = explode(" ",$cadena);

$longitud = count($array);
echo "<br>";
echo "Arreglo con datos de tipo string <br>";
for($i=0; $i<$longitud; $i++){
	echo $array[$i];
	echo "<br>";
}

?>