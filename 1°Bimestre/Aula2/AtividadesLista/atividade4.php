<?php

$contadorPar = 0;
$contadorImpar = 0;

for ($i=0; $i < 10 ; $i++) { 

    $num[] = (int) readline("Informe o número: \n");

}

for ($j=0; $j < 10; $j++) { 
    if($num[$j] % 2 == 0){
        $contadorPar++;
    }
    else {
        $contadorImpar++;
    }
}

print "Foram informados $contadorPar números pares e $contadorImpar números impares.";