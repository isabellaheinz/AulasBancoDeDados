<?php

require_once("Modelo/Pais.php");
require_once("Modelo/Jogador.php");

$pais = new Pais();
$pais->setNome("Brasil");
$pais->setContinente("América");
$pais->setTitulos(5);

print_r($pais);

$jogador = new Jogador();
$jogador->setNome("Marta");
$jogador->setPosicao("Atacante");
$jogador->setNumero(10);
$jogador->setPais($pais);

echo "Nome do Jogador: " . $jogador->getNome() . "\n";
echo "Posição do Jogador: " .  $jogador->getPosicao() . "\n";
echo "Numero do Jogador: " .  $jogador->getNumero() . "\n";
echo "Páis do Jogador: " . $jogador->getPais() . "\n";