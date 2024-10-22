<?php
/* CBTIS 89
Programa que calcula la cantidad de billetes de cierta cantidad en un cheque por medio de residuos
Jaquez Almaguer
3ºA Programaciòn matutino
*/

$Cheque;$Dis;$Rees;
$Cheque=69420;
echo "El valor del cheque es ", $Cheque;
echo "<br>";


$Dis=$Cheque/1000; 
$Rees=$Cheque%1000;



echo "El número de billetes de 1000 es ", floor($Dis);
echo "<br>";

$Dis=$Rees/500; 
$Rees=$Rees%500;

echo "El número de billetes de 500 es ", floor($Dis);
echo "<br>";

$Dis=$Rees/200; 
$Rees=$Rees%200;

echo "El número de billetes de 200 es ", floor($Dis);
echo "<br>";


$Dis=$Rees/100; 
$Rees=$Rees%100;

echo "El número de billetes de 100 es ", floor($Dis);
echo "<br>";


$Dis=$Rees/50; 
$Rees=$Rees%50;

echo "El número de billetes de 50 es ", floor($Dis);
echo "<br>";

$Dis=$Rees/20; 
$Rees=$Rees%20;

echo "El número de billetes de 20 es ", floor($Dis);
echo "<br>";

$Dis=$Rees/10; 
$Rees=$Rees%10;

echo "El número de billetes de 10 es ", floor($Dis);
echo "<br>";

$Dis=$Rees/5; 
$Rees=$Rees%5;

echo "El número de billetes de 5 es ", floor($Dis);
echo "<br>";

$Dis=$Rees/1; 
$Rees=$Rees%1;

echo "El número de billetes de 1 es ", floor($Dis);
echo "<br>";


?>