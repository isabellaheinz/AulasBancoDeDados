<?php

$num1 = (int) readline("Me informe o Primeiro número: ");
$num2 = (int) readline("Me informe o Segundo número: ");


for ($i = $num1 + 1; $i < $num2; $i++) {
    if ($i % 5 == 0) {
        print $i . "\n";
    }
}
