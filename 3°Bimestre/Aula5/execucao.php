<?php

require_once("Modelo/Comercial.php");
require_once("Modelo/Industrial.php");
require_once("Modelo/Residencial.php");

$opcao = 0;
do {

    echo "Qual conta você deseja calcular?\n";
    echo "1- Residencial.\n";
    echo "2- Comercial.\n";
    echo "3- Industrial.\n";
    echo "0- Sair.\n";
    $opcao = readline("");

    switch ($opcao) {
        case 1:
            $conta = new Residencial;
            $conta->setConsumo(readline("Informe o consumo em KWH: "));
            echo "O valor da sua conta será de R$" . $conta->getValorFatura();
            echo "\n\n"; 
            break;

        case 2:
            $conta = new Comercial;
            $conta->setConsumo(readline("Informe o consumo em KWH: "));
            echo "O valor da sua conta será de R$" . $conta->getValorFatura();
            echo "\n\n"; 
            break;

        case 3:
            $conta = new Industrial;
            $conta->setConsumo(readline("Informe o consumo em KWH: "));
            echo "O valor da sua conta será de R$" . $conta->getValorFatura();
            echo "\n\n"; 
            break;
        
        case 0: 
            break;

        default:
            echo "Opção Inválida. Tente novamente.\n\n";
            break;
    }

} while ($opcao != 0);
