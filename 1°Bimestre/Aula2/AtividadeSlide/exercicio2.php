<?php

$num = readline("Informe um número: ");
print "Os antecessores desse número são: ";

for ($i=$num-1; $i > 0; $i--) { 
    print $i ."-";
}