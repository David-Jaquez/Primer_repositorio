<?php
/* CBTIS 89
Programa que almacena diversos nombres en un arreglo y posteriormente los imprime por medio de un ciclo
Jaquez Almaguer
3ºA Programaciòn matutino
*/
$arrayNombres =array("Ena", "Lucius", "Roy", "Lilina", "Basil", "Eirika");
//Se obtiene el número de elementos
$longitud = count($arrayNombres);
//Recoorre todos los elementos
for($i=0; $i<$longitud; $i++)
	{ //Se obtiene el valor de cada elemento 
echo $arrayNombres[$i];
echo "<br>";
	}
	?>