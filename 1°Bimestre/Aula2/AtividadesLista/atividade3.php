<?php

for ($i=0; $i < 3 ; $i++) { 
    $numeros[] = (int) readline("Me informe um número inteiro: ");

}

$menorValor = min($numeros);

print "O menor valor é $menorValor";