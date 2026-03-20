<?php

for ($i=0; $i < 10 ; $i++) { 

    $num[] = (int) readline("Informe o número: \n");

}

for ($j=0; $j < 10; $j++) { 
    if($num[$j] > 0){
        print "O número " . $num[$j] . " é positivo; \n";
    }
    else if ($num[$j] < 0){
        print "O número " . $num[$j] . " é negativo; \n";
    }
    else {
        print "O número " . $num[$j] . " não é positivo nem negativo; \n";
    }
}