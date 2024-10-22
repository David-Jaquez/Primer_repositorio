<?php
/* CBTIS 89
Programa que agrega dos valores a un array ya existente
Jaquez Almaguer
3ºA Programaciòn matutino
*/
   $array_numerico_indexado = array(1, "Gato", 2, "Perro");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR><BR>";
   }

   array_push($array_numerico_indexado, 3, "Caballo");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }
?>