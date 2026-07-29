<?php

class Carta {
    private $numero;
    private $nome;
    private $dica;

    public function __toString()
    {
        $dados = "N° da Carta: " . $this->numero . " | Personagem: " . $this->nome . "\n";
        return $dados;
    }

    public function exibirDica() {
        $dados = "Dica: "  . $this->dica . "\n";
        return $dados;
    }


    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getDica()
    {
        return $this->dica;
    }

    public function setDica($dica): self
    {
        $this->dica = $dica;

        return $this;
    }
}

$BaralhoBarbies = array();

/* Criação das Cartas das Personagens de filmes da Barbie: */

$carta = new Carta;
$carta->setNumero(1);
$carta->setNome("Genevive");
$carta->setDica("Esta personagem possui uma Flor em seu vestido e utiliza sapatinhas.");
array_push($BaralhoBarbies, $carta);

$carta = new Carta;
$carta->setNumero(2);
$carta->setNome("Blair");
$carta->setDica("Esta personagem tem um lindo vestido rosa e uma coroa de pedras.");
array_push($BaralhoBarbies, $carta);

$carta = new Carta;
$carta->setNumero(3);
$carta->setNome("Tori");
$carta->setDica("Esta personagem é uma princesa e possui uma escova mágica.");
array_push($BaralhoBarbies, $carta);

$carta = new Carta;
$carta->setNumero(4);
$carta->setNome("Merliah");
$carta->setDica("Esta personagem tem mechas rosas em seu cabelo.");
array_push($BaralhoBarbies, $carta);

$carta = new Carta;
$carta->setNumero(5);
$carta->setNome("Annelise");
$carta->setDica("Esta personagem tem um gato branco de estimação.");
array_push($BaralhoBarbies, $carta);

$carta = new Carta;
$carta->setNumero(6);
$carta->setNome("Rosella");
$carta->setDica("Esta personagem usa um vestido com penas de pavão.");
array_push($BaralhoBarbies, $carta);

$carta = new Carta;
$carta->setNumero(7);
$carta->setNome("Liana");
$carta->setDica("Esta personagem tem um colar da amizade com sua amiga.");
array_push($BaralhoBarbies, $carta);


$CartaSorteada = $BaralhoBarbies[array_rand($BaralhoBarbies)];

echo "Bem vindo ao baralho de cartas da Barbie!\n";
echo "Cada carta contém uma personagem de algum filme da Barbie.\n";
echo "Você deve tentar adivinhar a carta que foi sorteada!\n\n";

do {

echo "\nO que você deseja fazer?\n";
echo "1- Exibir Cartas Disponivéis.\n";
echo "2- Exibir Dica da carta Sorteada.\n";
echo "3- Dar um palpite.\n";
echo "4- Desistir.\n";
$opcao = readline("Resposta: ");

switch ($opcao) {
    case 1:
        echo "\nCartas Disponivéis: \n\n";

        foreach ($BaralhoBarbies as $carta) {
        echo $carta . "\n";
        }
        break;

    case 2: 

        echo "\nDica da carta sorteada:\n";
        echo $CartaSorteada->exibirDica();
        break;
    
    case 3:

        echo "\nDe seu palpite de qual foi a carta sorteada!\n";
        echo "Lembre-se de digitar o número da carta como chute.\n";
        $resposta = readline("Resposta: "); 

        if ($resposta == $CartaSorteada->getNumero()) {
            echo "\nParabens! Você acertou a carta sorteada.\n";
            $opcao = 0;
        } else if ($resposta != $CartaSorteada->getNumero()) {
            echo "\nInfelizmente você não acertou. Tente novamente.\n";
        }

        break;

    case 4:
        echo "\nQue pena que desistiu!\n";
        echo "A carta sorteada era:\n";
        echo $CartaSorteada;
        echo "\nObrigada por jogar!\n";
        $opcao = 0;
        break;
    
    default:
        echo "Opcão inválida. Tente Novamente.\n";
        break;
}

} while ($opcao != 0);
