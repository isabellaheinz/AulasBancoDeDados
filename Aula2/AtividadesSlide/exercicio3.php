<?php

for ($i=0; $i < 5; $i++) { 

    $nome = readline("Informe seu nome: \n");
    $peso = (float) readline("Informe seu peso em kg: \n");
    $altura = readline("Informe sua altura: ");

    $imc = $peso / ($altura*$altura);
    print "$nome tem $peso kg, $altura de altura, e o IMC = $imc .";

}