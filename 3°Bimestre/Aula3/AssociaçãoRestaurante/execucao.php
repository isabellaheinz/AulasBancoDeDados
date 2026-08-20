<?php

require_once("Modelo/Pedido.php");
require_once("Modelo/Prato.php");

$pratos = array();
$pedidos = array();

$prato = new Prato();
$prato->setNumero(1);
$prato->setNome("Camarão à Milanesa");
$prato->setValor(110.00);
array_push($pratos, $prato);

$prato = new Prato();
$prato->setNumero(2);
$prato->setNome("Pizza Margherita");
$prato->setValor(80.00);
array_push($pratos, $prato);

$prato = new Prato();
$prato->setNumero(3);
$prato->setNome("Macarrão à Carbonara");
$prato->setValor(60.00);
array_push($pratos, $prato);

$prato = new Prato();
$prato->setNumero(4);
$prato->setNome("Bife à Parmegiana");
$prato->setValor(75.00);
array_push($pratos, $prato);

$prato = new Prato();
$prato->setNumero(5);
$prato->setNome("Risoto ao Funghi");
$prato->setValor(70.00);
array_push($pratos, $prato);

function VincularPrato($pratos, $numero){

    foreach ($pratos as $prato) {
       if($prato->getNumero() == $numero) {
        return $prato;
       }
    }
    return null;

}

function IndiceExiste($array, $indice) {
    foreach($array as $ind => $valor) {
        if($ind == $indice-1) {
            return true;
        }
    }
    return false;
}

do {
    echo "1- Cadastrar Pedido.\n";
    echo "2- Cancelar Pedido.\n";
    echo "3- Listar Pedidos.\n";
    echo "4- Total de Vendas.\n";
    echo "0- Sair.\n";
    $opcao = readline("");

    switch ($opcao) {

        case 1:
            echo "\nPratos Disponíveis: \n";
            foreach ($pratos as $prato) {
                echo $prato;
            }

            $pedido = new Pedido();
            $pedido->setNomeCliente(readline("Informe o nome do Cliente: "));
            $pedido->setNomeGarcom(readline("Informe o nome do Garçom: "));
            $numPrato = readline("Informe o número do prato: ");

            if(VincularPrato($pratos, $numPrato) != null) {
                
                $pedido->setPrato(VincularPrato($pratos, $numPrato));
                echo "Prato cadastrado com sucesso!\n\n";

                array_push($pedidos, $pedido);

            } else {
              echo "Não foi possivel realizar o cadastro do prato.\n\n";
            }
           
            break;
        
        case 2:
            $indice = readline("\nInforme o índice do pedido que deseja cancelar: ");
            if(IndiceExiste($pedidos, $indice)) {
                array_splice($pedidos, $indice - 1, 1);
                echo "Pedido cancelado com sucesso. \n\n";
            } else {
                echo "Indice não encontrado. Tente novamente. \n\n";
            }
           
            break;

        case 3: 
            

            if(count($pedidos) > 0) {
                echo "\nListando pedidos: \n";
                foreach ($pedidos as $num => $pedido) {
                    echo "Pedido número " . $num+1 . ": ";
                    echo "O(a) cliente " . $pedido->getNomeCliente() . ", foi atendido pelo(a) garçom " . $pedido->getNomeGarcom() . ", pediu o prato " . $pedido->getPrato()->getNome() . " no valor de R$ " . $pedido->getPrato()->getValor() . " . \n\n";
                }
            } else {
                echo "Ainda não há pedidos cadastrados.\n\n";
            }

            break;

        case 4:  
            $totalVendas = 0;
            foreach ($pedidos as $pedido) {
                $totalVendas += $pedido->getPrato()->getValor();
            }

            if(count($pedidos) > 0) {
                echo "\nExibindo o total de vendas: \n";
                echo "R$ " . $totalVendas . " coletados em " . count($pedidos) . " pedidos.\n\n";
            } else {
                echo "Ainda não foram realizadas vendas.  \n\n";
            } 
            break;

        case 0:
            break;
    
        default:
            echo "Opção inválida. Tente novamente. \n\n";
        break;
   }
} while ($opcao != 0);
