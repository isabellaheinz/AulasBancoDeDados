<?php

$numeros = array();
do {

    $num = readline("Me informe um número: ");

    if ($num > 0) {
        array_push($numeros, $num);
    }
} while ($num > 0);

print "A soma de todos os números é " . soma($numeros) . ";\n";
print "A quantidade de números pares é " . pares($numeros) . ";\n";
print "A quantidade de números impáres  é " . impares($numeros) . ";\n";
print "A quantidade de números divisiveis por 5 é " . divisor($numeros) . ";\n";
print "A diferença entre maior e o menor número é  " . diferenca($numeros) . ";\n";
print "A quantidade de números 3, 6 e 9 é " . numeros369($numeros) . ".\n";

function soma($vetor)
{

    $soma = 0;

    foreach ($vetor as $num) {
        $soma += $num;
    }

    return $soma;
}

function pares($vetor)
{

    $contador = 0;

    foreach ($vetor as $num) {
        if ($num % 2 == 0) {
            $contador++;
        }
    }

    return $contador;
}

function impares($vetor)
{

    $contador = 0;

    foreach ($vetor as $num) {
        if ($num % 2 == 1) {
            $contador++;
        }
    }

    return $contador;
}

function divisor($vetor)
{

    $contador = 0;

    foreach ($vetor as $num) {
        if ($num % 5 == 0) {
            $contador++;
        }
    }

    return $contador;
}

function diferenca($vetor)
{

    $maior = $vetor[0];
    $menor = $vetor[0];

    foreach ($vetor as $num) {
        if ($num > $maior) {
            $maior = $num;
        }

        if ($num < $menor) {
            $menor = $num;
        }
    }

    $diferenca = $maior - $menor;
    return $diferenca;
}

function numeros369($vetor)
{
    $contador = 0;

    foreach ($vetor as $num) {
        if ($num == 3 or $num == 6 or $num == 9) {
            $contador++;
        }
    }

    return $contador;
}
