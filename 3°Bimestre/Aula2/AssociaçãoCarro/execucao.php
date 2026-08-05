<?php

require_once("Modelo/Carro.php");
require_once("Modelo/Fabricante.php");

$fabricantes = array();

$fabricante = new Fabricante;
$fabricante->setNome("Volkswagem");
$fabricante->setSigla("VW");
array_push($fabricantes,$fabricante);

$fabricante = new Fabricante;
$fabricante->setNome("Chevrolet");
$fabricante->setSigla("GM");
array_push($fabricantes,$fabricante);

$fabricante = new Fabricante;
$fabricante->setNome("Fiat");
$fabricante->setSigla("F");
array_push($fabricantes,$fabricante);

$fabricante = new Fabricante;
$fabricante->setNome("Renault");
$fabricante->setSigla("RN");
array_push($fabricantes,$fabricante);

function Vincular($sigla, $fabricantes){

    if ($sigla == "VW" or "GM" or "F" or "RN"){
         foreach ($fabricantes as $fabricante) {
            if($sigla == $fabricante->getSigla()) {
                return $fabricante;
        } 
     }
    } else {
        return false;
    }

}

$carros = array();

do {

    echo "\nEscolha uma das opções abaixo: \n";
    echo "1- Cadastrar carro.\n";
    echo "2- Excluir carro.\n";
    echo "3- Listar carros.\n";
    echo "0- Sair.\n";
    $opcao = readline("");

    switch ($opcao) {
        case 1:
            $carro = new Carro;
            $carro->setModelo(readline("Informe o modelo do carro: "));
            $carro->setAnoFabricacao(readline("Informe o ano de fabricação do carro: "));
            echo "Informe a sigla de um dos fabricantes abaixo: \n";
            echo "VW - Volkswagem.\nGM - Chevrolet.\nF - Fiat.\nRN - Renault. \n";
            $sigla = readline("");
            $carro->setFabricante(Vincular($sigla, $fabricantes));

            if (Vincular($sigla, $fabricantes) == false) {
                echo "Não foi possivel cadastrar o carro. Tente novamente.";
            } else {
                echo "Carro cadastrado com sucesso!\n";
                array_push($carros, $carro);
            }
            
            break;

        case 2:
            $quantItens = count($carros);
            $indiceRemocao = readline("Informe o índice do carro que deseja remover: ");

            if ($indiceRemocao < $quantItens) {
                array_splice($carros, $indiceRemocao, 1);
                echo "Remoção concluída com sucesso! \n";
            } else {
                echo "Indice não disponível.\n";
            }
            break;

        case 3:
            echo "Listando carros:\n\n";
            foreach ($carros as $car) {
                echo $car;
                echo "\n";
                
            }
            break;

        case 0:
            break;
        
        default:
            echo "Opção inválida. Tente novamente.\n";
            break;
    }

} while ($opcao != 0);
