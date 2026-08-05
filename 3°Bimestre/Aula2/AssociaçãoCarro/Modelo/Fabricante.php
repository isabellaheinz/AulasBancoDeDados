<?php

class Fabricante {
    private string $nome;
    private string $sigla;

    public function __toString()
    {
        $dados = "Fabricante: " . $this->nome . " | Sigla: " . $this->sigla;
        return $dados;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getSigla(): string
    {
        return $this->sigla;
    }

    public function setSigla(string $sigla): self
    {
        $this->sigla = $sigla;

        return $this;
    }
}
