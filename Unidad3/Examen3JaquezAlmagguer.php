<?php
/* CBTIS 89
Programa que almacena eñ nombre de cuatro personas en un arreglo y en otro multidimensional almecena las calificaciones de cada un por medio de filas y columnas, calculando por medio de cilcos el promedio y su status.
Jaquez Almaguer
3ºA Programaciòn matutino
*/
$Alumnos=array("Luz","Fer","Leo","Ale");
$Calificaciones = array(
array(6, 4,5),array(7, 9,8),array(7, 9,5),array(5, 4,6));
$Promedio = array();
$Status = array();
echo "Alumnos--------Promedio-------Status";
echo "<br>";
 for($i=0; $i<4; $i++){
      for($j=0; $j<1; $j++){
      	$Promedio[]=$Calificaciones[$i][$j]."  ";
      }
  }
  for($i=0; $i<4; $i++){
      for($j=1; $j<2; $j++){
        $Promedio[$i]+=$Calificaciones[$i][$j]."  ";
      }
  }
  for($i=0; $i<4; $i++){
      for($j=2; $j<=2; $j++){
        $Promedio[$i]+=$Calificaciones[$i][$j]."  ";
         $Promedio[$i]=$Promedio[$i]/3;
      }
  }
   for($i=0; $i<=3; $i++){
   	echo "$Alumnos[$i]------------------";

   	 echo "$Promedio[$i]-----------";
 	if ($Promedio[$i]>5){
 	echo "Aprobado";
 	echo "<br>";}
 	else {
 		echo "Reprobado";
 	echo "<br>";
  }
}
 echo "CALIFICACIONES";
echo "<br>";
  for($i=0; $i<4; $i++){
      for($j=0; $j<3; $j++){
         echo $Calificaciones[$i][$j]." ";
        
      } 
       echo "<br>";
  }
?>