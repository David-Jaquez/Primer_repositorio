<?php
/* CBTIS 89
Programa que almacena los nombres y posiciones de jugadores de futbol y los imprime en esa forma
Jaquez Almaguer
3ºA Programaciòn matutino
*/
$equipo =array("Portero"=>"Julius","Defensa"=>"Doga","Medio"=>"Jaffar","Delantero"=>"Rafiel");
echo "** SELECCIÓN NACIONAL **","<br>","<br>";
foreach($equipo as $Posicion=>$jugador)
	{ 
echo "El jugador " . $jugador . " es el " . $Posicion;
echo "<br>","<br>";
	}
	?>