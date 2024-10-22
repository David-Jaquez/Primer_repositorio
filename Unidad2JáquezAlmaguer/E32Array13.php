<?php
/* CBTIS 89
Programa que agraga dos valores a un array ya existente y lo ordena alfabeticamente de forma ascendente y descendente
Jaquez Almaguer
3ºA Programaciòn matutino
*/
$arraynumerico = array("Camisa ", " Pantalon ", " Cinturon ");
array_push($arraynumerico, " Calcetines ", " Gorra ");
 foreach($arraynumerico as $Prenda){
sort($arraynumerico);
echo $Prenda;}
//var_export($arraynumerico);
echo "<p>";

foreach($arraynumerico as $Prenda){
rsort($arraynumerico);
echo $Prenda;}
//var_export($arraynumerico);
?>