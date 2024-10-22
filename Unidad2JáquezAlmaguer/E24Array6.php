<?php
/* CBTIS 89
Programa que almacena nombres de alumnos y sus carreras y los imprime así
Jaquez Almaguer
3ºA Programaciòn matutino
*/
$Alumnos =array("Colon"=>"Mecatróinica","Monica"=>"Financas","Latona"=>"Administración","Noise"=>"Programación", "Ephraim"=>"Electrónica");
echo "** ESTADÍSTICA ALUMNOS **","<br>","<br>";
foreach($Alumnos as $estudiantes=>$Carrera)
	{ 
echo "El alumn@ " . $estudiantes . " Estudia en el CBtis 89, en la carrera de " . $Carrera;
echo "<br>","<br>";
	}
	?>