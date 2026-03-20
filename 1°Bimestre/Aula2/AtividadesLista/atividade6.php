<?php

$num = readline("Me infome o número: ");
$num2 = readline("Por qual número quer multiplicalo? ");
$resultado = 0;

for ($i=0; $i < $num2 ; $i++) { 
    $resultado += $num;
}

print "O resultado da multiplicação é $resultado";

