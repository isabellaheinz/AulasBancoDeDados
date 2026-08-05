<?php

require_once("Modelo/Atleta.php");
require_once("Modelo/Pais.php");

$atletas = array();

do {

    echo "\nEscolha uma das opções abaixo: \n";
    echo "1- Cadastrar Atleta.\n";
    echo "2- Excluir Atleta.\n";
    echo "3- Listar Atletas.\n";
    echo "0- Sair.\n";
    $opcao = readline("");

    switch ($opcao) {
        case 1:
            $atleta = new Atleta;
            $atleta->setNome(readline("Informe o nome do atleta: "));
            $atleta->setIdade(readline("Informe a idade do atleta: "));
            $atleta->setEsporte(readline('Informe o esporte do atleta: '));
            $pais = new Pais;
            $pais->setNome(readline("Informe o nome do país do atleta: "));
            $pais->setContinente(readline("Informe o nome do continente do atleta: "));
            $atleta->setPais($pais);

            array_push($atletas,$atleta);
            break;
        
        case 2: 
            $quantItens = count($atletas);
            $indiceRemocao = readline("Informe o índice do atleta que deseja remover: ");

            if ($indiceRemocao < $quantItens) {
                array_splice($atletas, $indiceRemocao, 1);
                echo "Remoção concluída com sucesso! \n";
            } else {
                echo "Indice não disponível.\n";
            }
            break;

        case 3: 
            echo "Listando Atletas: \n\n";
            foreach ($atletas as $atleta) {
                echo $atleta;
            }
            break;

        case 0: 
            break;
        default:
            echo "Opção inválida. Tente novamente.\n";
            break;
    }

} while ($opcao != 0);

