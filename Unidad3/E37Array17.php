<?php
/* CBTIS 89
Programa que imprime los números pares entre el 1 y el 100 con un ciclo
Jaquez Almaguer
3ºA Programaciòn matutino
*/
$arraynumeros = array(33, 55, -27, 2, -43, 23, -231, 87, -8, 34, -12, 22, -11, 76, -5);
$arraypositivos = array();
$arraynegativos = array();
$sumaP=0;
$sumaN=0;

for($i=0; $i<count($arraynumeros); $i++){
	if($arraynumeros[$i] >= 0){
		$arraypositivos[] = $arraynumeros[$i];
		$sumaP += $arraynumeros[$i];
	} else {
		$arraynegativos[] = $arraynumeros[$i];
		$sumaN += $arraynumeros[$i];
	}
}

echo "positivos </P>";
for($i=0; $i<count($arraypositivos); $i++){
		echo $arraypositivos[$i];
		echo "<br>";
	}
	echo "suma de positivos: $sumaP</P>";
	echo "negativos <p>";
for($i=0; $i<count($arraynegativos); $i++){
		echo $arraynegativos[$i];
		echo "<br>";
	}
	echo "suma de negativos: $sumaN<p>";
	?>
