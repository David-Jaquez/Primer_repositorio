<?php
/* CBTIS 89
Programa que almacena varios nombres en un array e identifica con un ciclo si un nombre específico esta en el array
Jaquez Almaguer
3ºA Programación matutino
*/
$arrayNombres =array("Ena", "Lucius", "Roy", "Lilina", "Basil", "Eirika", "Janaff", "Jill");
$nombre="Janaff";
$longitud = count($arrayNombres);
for($i=0; $i<$longitud; $i++)
	{ 
		if ($arrayNombres[$i]==$nombre){
	echo "Este nombre esta en el array";
echo "<br>";
}
else
{
	echo "Este nombre NO esta en el array";
echo "<br>";
}

	}
	?>