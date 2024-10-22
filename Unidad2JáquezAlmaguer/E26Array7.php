<?php
/* CBTIS 89
Programa que almacena varios arrays en un array
Jaquez Almaguer
3ºA Programaciòn matutino
*/
$datos = array(
             array(0, 0, 0),
             array(0, 0, 1),
             array(0, 0, 2));
       foreach($datos as $datos2){
      foreach($datos2 as $dato){
         echo "$dato ";
      }
      echo "<br>"; 
   }

     ?>