<?php
/* CBTIS 89
Programa que suma dos valores en diferentes arreglos y almacena el resultado en un tercer arreglo
Jaquez Almaguer
3ºA Programación matutino
*/

$arrayN=[10, 20, 30, 40, 50];
$arrayK=[3, 7, 6, 15, 18];
$Lem =count($arrayN);
      $res = array();
      $rer = array();
      $rem =array();
      $red =array();
	echo "SUMA ENTRE ARREGLOS <br>";
 for($i=0; $i<$Lem; $i++)
	{ 
	$res=$arrayN[$i]+$arrayK[$i];
	echo "$arrayN[$i]+$arrayK[$i]= $res";
	echo "<br>";
}
echo "<br>";
echo "RESTA ENTRE ARREGLOS <br>";
 for($i=0; $i<$Lem; $i++)
	{ 
$rer=$arrayN[$i]-$arrayK[$i];
	echo "$arrayN[$i] + $arrayK[$i] = $rer";
	echo "<br>";
}
echo "<br>";
echo "MULTIPLICACIÓN ENTRE ARREGLOS <br>";
 for($i=0; $i<$Lem; $i++)
	{ 	
$rem=$arrayN[$i]*$arrayK[$i];
	echo "$arrayN[$i] * $arrayK[$i] = $rem";
	echo "<br>";
}
echo "<br>";
echo "DIVISIÓN ENTRE ARREGLOS <br>";
 for($i=0; $i<$Lem; $i++)
	{
	
$red=$arrayN[$i]/$arrayK[$i];
	echo "$arrayN[$i] / $arrayK[$i] = $red";
	echo "<br>";}

?>