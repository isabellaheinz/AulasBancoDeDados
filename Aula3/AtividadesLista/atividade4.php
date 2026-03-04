<?php

$numA = readline("Me informe o número A: ");
$numB = readline("Me informe o número B: ");
$numC = readline("Me informe o número C: ");

print "A média ponderada é igual a " . mediaPonderada($numA,$numB,$numC) . ". \n";

function mediaPonderada($numA, $numB, $numC){
   $media = (($numA*3) + ($numB*5) + ($numC*2))/ 10;
   return $media;
}