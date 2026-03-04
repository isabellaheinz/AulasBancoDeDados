<?php

$total = 0;

do{

    $valor = (float) readline ("Você pode contribuir com quanto? ");

    $total += $valor;

} while ($valor != 0);

print "O valor total arrecadado foi de R$" . $total;