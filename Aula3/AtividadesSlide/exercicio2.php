<?php

for ($i=0; $i < 3; $i++) { 
    $raio = readline("Informe o Raio do circulo em centimetros: ");
    print "A área do circulo é " . areaCirculo($raio) . "cm². \n";
    print "A circunferência do circulo é " . circuferenciaCirculo($raio) . "cm. \n";
}
$raio = readline("Informe o Raio do circulo em centimetros: ");

function areaCirculo($raio, $pi = 3.14){
    $area = $pi*$raio*$raio;
    return $area;
}

function circuferenciaCirculo($raio, $pi=3.14){
    $circuf = 2*$pi*$raio;
    return $circuf;
}

