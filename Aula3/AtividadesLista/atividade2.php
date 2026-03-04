<?php

for ($i=0; $i < 3; $i++) { 
    $base= readline("Informe o valor da Base em cm: ");
    $altura= readline("Informe o valor da altura em cm: ");

    print "A área do retângulo é " . area($base, $altura) . ". \n";
    print "O perimetro do retângulo é " . perimetro($base, $altura). ". \n";
}


function area($base, $altura){
    $area = $base*$altura;
    return $area;
}

function perimetro($base, $altura){
    $perimetro = ($base*2) + ($altura*2);
    return $perimetro;
}