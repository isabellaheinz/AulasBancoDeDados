<?php

do{
    $num = readline("Me informe o número: ");

    for ($i=$num-1; $i > 0 ; $i--) { 
        $result = divisãoExata($num, $i);
        if($result){
            print "$i - ";
        }
    }
    print "\n";

} while ($num > 1);

function divisãoExata($dividendo, $divisor){
    if($dividendo % $divisor == 0){
        return true;
    } else {
        return false;
    }
}