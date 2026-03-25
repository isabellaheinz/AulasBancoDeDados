<?php

$total= 0;

for ($i=0; $i < 10 ; $i++) { 
    $num[] = readline("Me informe um número: ");
}

for ($i=0; $i < 10 ; $i++) { 
  $total += $num[$i];  
}

$media = $total/10;

print "A média aritmética é :" . $media;
