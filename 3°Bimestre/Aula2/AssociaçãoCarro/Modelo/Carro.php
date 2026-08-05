<?php

require_once("Fabricante.php");

class Carro {
    private string $modelo;
    private int $anoFabricacao;
    private Fabricante $fabricante;

    public function __toString()
    {
        $dados = "Modelo: " . $this->modelo . " | Ano de fabricação: " . $this->anoFabricacao . " | " . $this->fabricante;
        return $dados;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getAnoFabricacao(): int
    {
        return $this->anoFabricacao;
    }

    public function setAnoFabricacao(int $anoFabricacao): self
    {
        $this->anoFabricacao = $anoFabricacao;

        return $this;
    }

    public function getFabricante(): Fabricante
    {
        return $this->fabricante;
    }

    public function setFabricante(Fabricante $fabricante): self
    {
        $this->fabricante = $fabricante;

        return $this;
    }
}
