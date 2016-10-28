<?php
function xpto(){
	echo"hello world";
}
 define ("PI",3.1425); // constante simbolica
 
 define(
 "CREATE_BD",
 "Create schema minha_bd;");

 $i=10;
 echo $i.PHP_EOL;
 $i=10.2; //float
 echo $i.PHP_EOL;
 
 $i="Artur"; //string avaliativa
  echo $i.PHP_EOL;
 $i='Artur';// string literal
 echo $i.PHP_EOL;
 $i=true; // boolean(0 é considerado como false; tudo diferente de 0 é true)
  echo $i.PHP_EOL;
 $i=xpto;// function_exists
 echo $i.PHP_EOL;
 $i=new Date("Y-m-d H:m:s"); // objecto intancia de date
  echo $i.PHP_EOL;
  
  xPTo(); // nao ha sensibilidade ao tamanho de letras das funçoes
  
  echo PI;
  
?>