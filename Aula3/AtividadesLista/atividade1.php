<?php

for ($i=0; $i < 5; $i++) { 
    $valorX = readline("Informe o valor de X: ");
    print "O valor de Y na função 5x + 2x + 3, é igual a " . funcao($valorX) . ". \n";
}

function funcao($x){
    $funcao = (5*$x) + (2*$x) + 3;
    return $funcao;
}