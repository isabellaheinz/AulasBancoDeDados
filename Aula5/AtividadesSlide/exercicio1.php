<?php

$comidas = ["Panquecas", "Waffle" , "Batata Frita", "Esfirra de Queijo", "Macarronada", ];
$doces = ["Açai", "KitKat" , "Creme de Cookies", "Sorvete Lacta", "Mousse de Maracuja"];
$roupas = ["Vestidos", "Camisetas","Calças", "Blusas de frio", "Saias"];
$maquiagem = ["Corretivo", "Rimel", "Blush" , "Gel de sombrancelha" , "Gloss"];

print "\nMeu top 5 de comidas: \n";
foreach($comidas as $informacao) {
    print $informacao . " | ";
}

print"\n";

print "\nMeu top 5 de doces: \n";
foreach($doces as $informacao) {
    print $informacao . " | ";
}

print"\n";

print "\nMeu top 5 de roupas: \n";
foreach($roupas as $informacao) {
    print $informacao . " | ";
}

print"\n";

print "\nMeu top 5 de maquiagem: \n";
foreach($maquiagem as $informacao) {
    print $informacao . " | ";
}