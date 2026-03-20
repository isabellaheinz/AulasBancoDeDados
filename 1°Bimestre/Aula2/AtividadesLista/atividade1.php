<?php

$num = (int) readline("Informe o número: \n");

 if($num > 0){
        print "O numero é positivo e o seu dobro é: " . $num * 2;
    }
    else if ($num < 0){
       print "O numero é negativo e o seu triplo é: " . $num * 3;
    }
    else {
        print "O numero é 0";
    }
