<?php
/* CBTIS 89
Programa que almacena Precios y nombres de frutas y los imprimes
Jaquez Almaguer
3ºA Programaciòn matutino
*/
$frutas =array("Manzana"=>25,"Mango"=>40,"Limón"=>35,"naranja"=>20, "lichis"=>58);
echo "** FRUTERIA Naranjia **","<br>","<br>";
foreach($frutas as $fruta=>$Precio)
	{ 
echo "El Kilo de " . $fruta . " cuesta " . $Precio;
echo "<br>","<br>";
	}
	?>