<?php

require_once("Modelo/Circulo.php");
require_once("Modelo/Quadrado.php");
require_once("Modelo/Retangulo.php");

do {

    echo "Qual dos poligonos você desaja descobrir a area?\n";
    echo "1- Quadrado.\n";
    echo "2- Retângulo.\n";
    echo "3- Círculo.\n";
    echo "0- Sair.\n";
    $opcao = readline("");

    switch ($opcao) {
        case 1:
            $quadrado = new Quadrado;
            $quadrado->setLado(readline("Informe o lado do quadrado: \n\n"));

            break;
        
        default:
            # code...
            break;
    }

} while ($opcao != 0);

