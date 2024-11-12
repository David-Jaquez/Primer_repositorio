<?php
/* CBTIS 89
Programa que almacena en un arreglo llamado $Compras el valor de 6 compras, posteriormente en otros arrglos se debe almacenar información de acuerdo a las siguientes condiciones:
El contenido del arreglo $Descuentos se llenará de la siguiente manera:
compra < 300 = 0
compra > 300 && <= 1000 = 10%
compra > 1000 && <= 2500 = 15%
compra > 2500 && <= 5000 = 20%
compra > 5000 = 20%
en el arreglo $Total se coloca la diferencia entre la compra y el descuento y el descuento y en el arreglo $Porcentaje colocar el porcentaje
Jaquez Almaguer
3ºA Programación matutino
*/
echo "Compras---Descuento-----Total------Porcentaje<p>";
$Compras=[5010, 4000, 1780, 1000, 200];
$Longitud =count($Compras);
      $Descuentos = array();
      $Total  = array();
      $Porcentaje = array();
      for($i=0; $i<$Longitud; $i++)
	{ if($Compras[$i]<300){
$Descuento[$i]=0;
$Porcentaje[$i]="0%";}
 if($Compras[$i]> 300 && $Compras[$i] <= 1000){
$Descuento[$i]=$Compras[$i]*0.10;
$Porcentaje[$i]="10%";}
 if($Compras[$i]> 1000 && $Compras[$i]<= 2500){
$Descuento[$i]=$Compras[$i]*0.15;
$Porcentaje[$i]="15%";}
 if($Compras[$i]> 2500 && $Compras[$i]<= 5000){
$Descuento[$i]=$Compras[$i]*0.20;
$Porcentaje[$i]="20%";}
 if($Compras[$i]>5000){
$Descuento[$i]=$Compras[$i]*0.25;
$Porcentaje[$i]="25%";}
$Total[$i]=$Compras[$i]-$Descuento[$i];
echo "$Compras[$i]$--------$Descuento[$i]$---------$Total[$i]$--------$Porcentaje[$i]";
echo "<br>";
}
      ?>	
