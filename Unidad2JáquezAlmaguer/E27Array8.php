<?php
/* CBTIS 89
Programa que imprime los números pares entre el 1 y el 100 con un ciclo
Jaquez Almaguer
3ºA Programaciòn matutino
*/
$datos =array();
for($l = 1; $l <= 100; $l++)
{$numeros[]=$l;}
foreach($numeros as $numero){
	if ($numero%2==0){
echo $numero . "<br>";
	}
}


	?>