<?php

require_once("Modelo/Filme.php");
$filmes = array();
$generosRepetidos = array();

for ($i=0; $i < 3; $i++) { 
    $filme = new Filme();
    $filme->setTitulo(readline("\nInforme o nome do filme: "));
    $filme->setGenero(readline("Informe o gênero do filme: "));
    $filme->setDiretor(readline("Informe o diretor do filme: "));
    $filme->setAnoLancamento(readline("Informe o ano de lançamento: "));

    array_push($filmes, $filme);
}

function BuscarTitulo($array, $titulo) {

    foreach ($array as $valor) {
        if($valor->getTitulo() == $titulo) {
            return $valor;
        }
    }
    return null;
}

function BuscarGenero($array, $genero, $generosRepetidos) {

    foreach ($array as $valor) {
        if($valor->getGenero() == $genero) {
            array_push($generosRepetidos, $valor);
        }
    }

    if(count($generosRepetidos) > 0){
        return $generosRepetidos;
    } else {
        return null;
    }
    
}

$opcao = 0;
do {

    echo "O que você deseja fazer? \n";
    echo "1- Buscar por título.\n";
    echo "2- Buscar por gênero.\n";
    echo "0- Sair.";
    $opcao = readline("");

    switch ($opcao) {
        case 1:
            $titulo = readline("\nInforme o título do filme: ");

            $filmeEncontrado = BuscarTitulo($filmes, $titulo);
            if($filmeEncontrado != null ){
                echo $filmeEncontrado;
                echo "\n";
            } else {
                echo "Filme não encontrado. Tente novamente.\n";
            }

            echo "\n";
            break;

        case 2:
            $genero = readline("\nInforme o gênero do filme: ");

            $filmesEncontrados = BuscarGenero($filmes, $genero, $generosRepetidos);
            if($filmesEncontrados != null ){
                foreach ($filmesEncontrados as $filme) {
                    echo $filme;
                    echo "\n";
                }
                
            } else {
                echo "Filme não encontrado. Tente novamente.\n";
            }

            echo "\n";
            break;

        case 0:
            break;
        
        default:
            echo "Opção inválida. Tente novamente.\n\n";
            break;
    }


} while($opcao != 0);
