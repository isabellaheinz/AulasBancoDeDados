<?php

require_once("Modelo/Cidade.php");
require_once("Modelo/Estado.php");

$cidades = array();

$estadoPR = new Estado;
$estadoPR->setNome("Paraná");
$estadoPR->setSigla("PR");

$estadoSC = new Estado;
$estadoSC->setNome("Santa Catarina");
$estadoSC->setSigla("SC");

$cidade = new Cidade;
$cidade->setNome("Florianópolis");
$cidade->setQntHabi(500000);
$cidade->setAltitude(3);
$cidade->setEstado($estadoSC);

array_push($cidades, $cidade);

$cidade = new Cidade;
$cidade->setNome("Blumenau");
$cidade->setQntHabi(300000);
$cidade->setAltitude(21);
$cidade->setEstado($estadoSC);

array_push($cidades, $cidade);

$cidade = new Cidade;
$cidade->setNome("Foz do Iguaçu");
$cidade->setQntHabi(300000);
$cidade->setAltitude(170);
$cidade->setEstado($estadoPR);

array_push($cidades, $cidade);

$cidade = new Cidade;
$cidade->setNome("Cascavel");
$cidade->setQntHabi(360000);
$cidade->setAltitude(780);
$cidade->setEstado($estadoPR);

array_push($cidades, $cidade);

foreach ($cidades as $cidade) {
    echo "A cidade de " . $cidade->getNome() . " localizada no estado " ;
    echo $cidade->getEstado() . "Possui " . $cidade->getQntHabi() . " habitantes e uma altitude de ";
    echo $cidade->getAltitude() . " metros. \n\n";
}


