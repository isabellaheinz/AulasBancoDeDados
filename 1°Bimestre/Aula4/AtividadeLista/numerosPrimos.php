<?php

do {
    $num = readline("Me informe o número: ");

    if ($num > 2) {
       
        if( primo($num) ) {
            print "Este número é primo. \n";
        } else {
            print "Este número não é primo; \n";
        }
    }

} while ($num > 2);

function primo($num, $contador=0)
{
    for ($i = 1; $i <= $num; $i++) {
        if ($num%$i==0) {
            $contador++;
        }
    }
    if($contador > 2) {
        return false;
    } else {
        return true;
    }
}
