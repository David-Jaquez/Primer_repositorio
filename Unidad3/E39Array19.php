<?php
/* CBTIS 89
Programa que almacena información de 6 personas y dpendiendo de su edad los contabiliza en diversos arreglos de acuerdo a las siguientes condiciones:
Grupo 1: menor de 18 años
Grupo 2: entre 18 y 49 años
Grupo 3: mas de 50 años
Jaquez Almaguer
3ºA Programaciòn matutino
*/
$Nombre = array("Paco","Mari","Lalo","Rosi","Paty","Beto");
$Edad = array(17,98,32, 12, 34, 24);
$Grupo1 = array();
$Grupo2 = array();
$Grupo3 = array();

for($i=0; $i<count($Nombre); $i++){
	if($Edad[$i] <= 18){
		$Grupo1[] = 1;
		
	} else {
		$Grupo1[] = 0;}
}

	for($i=0; $i<count($Nombre); $i++){
	if($Edad[$i] < 49 && $Edad[$i] > 18){
		$Grupo2[] = 1;
		
	} else {
		$Grupo2[] = 0;}
	}

	for($i=0; $i<count($Nombre); $i++){
	if($Edad[$i] > 50){
		$Grupo3[] = 1;
		
	} else {
		$Grupo3[] = 0;}
	}


echo "Nombre------Edades-----Grupo1--Grupo2--Grupo3 </P>";
for($i=0; $i<count($Nombre); $i++){
		echo "$Nombre[$i]------------$Edad[$i]-------------$Grupo1[$i]---------$Grupo2[$i]---------$Grupo3[$i]";
		echo "<br>";
	}
	
	?>
