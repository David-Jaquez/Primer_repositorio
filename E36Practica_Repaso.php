<?php
/* CBTIS 89
Programa que suma dos valores en diferentes arreglos y almacena el resultado en un tercer arreglo
Jaquez Almaguer
3ºA Programación matutino
*/
$arrayColby =array("Ena", "Lucius", "Roy", "Lilina", "Basil", "Eirika", "Janaff", "Jill");
$longitud = count($arrayColby);
for($i=0; $i<$longitud; $i++)
	{ 
	sort ($arrayColby);
echo $arrayColby[$i];
echo "<br>","<br>";
	rsort ($arrayColby);
echo $arrayColby[$i];
echo "<br>";
	}
	echo "<p>";
unset($arrayColby[4]);
unset($arrayColby[0]);
array_push($arrayColby,  "Gamzee", "Karkat", "Idate");
$Ren=array_rand($arrayColby);
$Ren2=$arrayColby[$Ren];
echo $Ren2;
echo "<p>";
$arrayOnero=array("Ena"=>"1500", "Lucius"=>"15", "Roy"=>"16", "Lilina"=>"17", "Basil"=>"14", "Eirika"=>"17", "Janaff"=>"15500", "Jill"=>"22");
foreach($arrayOnero as $Persona=>$Edad)
{
echo $Persona . " tiene " . $Edad . " Años ";
echo "<br>","<br>";
}


?>