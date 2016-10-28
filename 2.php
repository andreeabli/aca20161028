<?php
 $a = "eu ";
 $b= "$a, um gordo sapo".PHP_EOL;
 c='valor de c: $a, um gorfo sapo';
 
 echo $b;
 echo $c;
 
$joaquina= "anda de saias";

function xpto2(){
	global $joaquina;
	echo $joaquina;
} 

function xpto3(){
	
	echo $GLOBALS['joaquina'] ;
} 
 xpto2();

 xpto3();
 
?>