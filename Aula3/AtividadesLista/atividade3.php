<?php

imprimeDados("Foz do Iguaçu", 250000, "500km²", "145m", "Paraná-PR");
imprimeDados("Cascavel", 300000, "420km²", "320m", "Paraná-PR");
imprimeDados("Chapecó", 240000, "120km²", "620m", "Santa Catarina-SC");
imprimeDados("Blumenau", 330000, "200km²", "85m", "Santa Catarina-SC");
imprimeDados("Curitiba", 150000, "300km²", "850m", "Paraná-PR");


function imprimeDados($nome, $habitantes, $area, $altitude, $estado){
    print "$nome | $habitantes | $area | $altitude | $estado \n";
}

