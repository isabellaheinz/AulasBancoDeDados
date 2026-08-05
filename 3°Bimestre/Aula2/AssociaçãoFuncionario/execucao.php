<?php

require_once("Modelo/Departamento.php");
require_once("Modelo/Funcionario.php");

$funcionários = array();

for ($i=0; $i < 5 ; $i++) { 
    $funcionario = new Funcionario;
    $funcionario->setNome(readline("Me informe o nome do funcionário: "));
    $funcionario->setCargo(readline("Informe o cargo do funcionário: "));
    $funcionario->setSalario(readline("Informe o salário do funcionário: "));
    $departamento = new Departamento;
    $departamento->setNome(readline("Informe o nome do departamento do funcionário: "));
    $departamento->setNumSala(readline("Informe o número da sala do funcionário: "));

    $funcionario->setDepartamento($departamento);
    array_push($funcionários,$funcionario);

}

echo "\n";

foreach ($funcionários as $funcionario) {
    echo $funcionario;
    echo "\n\n";
}


