<?php

$linha1 = [
    "nome" =>  "Manuel de Medeiros", 
    "endereco" => "Rua das acácias" , 
    "cidade" => "Foz do Iguaçu", 
    "estado" => "PR"
    ];


$linha2 = [
    "nome" => "Juliana de Amaral", 
    "endereco" => "Rua dos pinheiros", 
    "cidade" => "Florianópolis", 
    "estado" => "SC" 
    ];

$linha3 = [
    "nome" => "Rodrigo Baidek" , 
    "endereco" =>  "Rua Dom Pedro 1", 
    "cidade" => "Petrópolis", 
    "estado" => "RJ"
    ];

$linha4 = [
    "nome" => "Fabíola da Silva" , 
    "endereco" => "Rua Chile" , 
    "cidade" => "Guarulhos", 
    "estado" => "SP"
    ]; 

$tabela = [$linha1, $linha2, $linha3, $linha4 ];

for ($i=0; $i < 4; $i++) { 
     foreach($tabela[$i] as $dado => $informacao){ 
    
    print  $informacao . " | " ;

}

print "\n";
}
