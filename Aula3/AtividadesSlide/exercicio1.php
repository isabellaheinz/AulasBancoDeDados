<?php

do{
    $num = readline("Informe um número que te mostrarei o fatorial: ");
    if($num>0){
        print "O fatorial do número é " . fatorial($num) . ". \n"; 
    }
    
} while ($num != 0);

function fatorial($numero){

    for ($i=$numero-1; $i > 1  ; $i--) { 
        $numero = $numero *$i;
    }

    return $numero;
}
