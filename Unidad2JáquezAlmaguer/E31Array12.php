<?php
/* CBTIS 89
Programa que ordena un array de forma ascendente y descendente
Jaquez Almaguer
3ºA Programaciòn matutino
*/
$arraynumerico = array(1, 3, 2, 5, 4, 7, 6);

//orden ascendente
sort($arraynumerico);
var_export($arraynumerico);

echo "<p>";

//orden descendente
rsort($arraynumerico);
var_export($arraynumerico);
?>