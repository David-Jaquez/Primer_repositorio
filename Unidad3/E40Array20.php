<?php
/* CBTIS 89
Programa que almacena por medio de un ciclo los numeros del 150 al 200 de la siguiente manera:
En el $arreglo 1 van los numeros pares, en el $Arreglo2 van los impares, en el $Arreglo3 va la suma de los úmeros correspondientes al mismo índice
Jaquez Almaguer
3ºA Programaciòn matutino
*/
$Arreglo1 = array();
$Arreglo2 = array();
$Arreglo3 = array();
echo "Arreglo1------Arreglo2-----Arreglo3 </P>";
for($i=150; $i <= 201; $i++)
{
if ($i%2==0){
	$Arreglo1[]=$i;
	
}
	
else{
	$Arreglo2[]=$i;
		
	}
}
	for($i=0; $i <count($Arreglo1); $i++){
	$Arreglo3[]=$Arreglo2[$i]+$Arreglo1[$i];
echo "$Arreglo1[$i]------------$Arreglo2[$i]------------$Arreglo3[$i]<br>";
}

?>