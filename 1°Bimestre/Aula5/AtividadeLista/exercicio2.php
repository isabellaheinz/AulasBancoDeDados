<?php

for ($i=0; $i < 5 ; $i++) { 
    $palavras[] = readline("Me informe uma palavra: ");
}

for ($i=0; $i < 5; $i++) { 
    $palavrasRepetidas[] = $palavras[$i];
}

foreach($palavrasRepetidas as $dado){
    print $dado . ", ";
}
