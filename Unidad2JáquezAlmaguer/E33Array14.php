<?php
/* CBTIS 89
Programa que ordena nombres de forma ascendente para dspues agregar 3 valores y ordenarlo de forma descendente
Jaquez Almaguer
3ºA Programación matutino
*/
$arrayNombres =array("Ena", "Lucius", "Roy", "Lilina", "Basil", "Eirika", "Janaff", "Jill");
$longitud = count($arrayNombres);
echo "Datos del arreglo ordenados de forma ascendente por medio un ciclo for";
echo "<br>";
for($i=0; $i<$longitud; $i++)
	{ 
sort($arrayNombres);
echo $arrayNombres[$i];
echo "<br>";
}

echo "<p>";

unset($arrayNombres[7]);
unset($arrayNombres[3]);

 array_push($arrayNombres,  "Gamzee", "Karkat", "Idate");

echo "Datos del arreglo ordenados de forma descendente por medio un ciclo for";
echo "<br>";
for($i=0; $i<$longitud; $i++)
	{ 
rsort($arrayNombres);
echo $arrayNombres[$i];
echo "<br>";
}
echo "<p>";

echo "La cantidad de nombres en el array es de: $longitud ";






?>