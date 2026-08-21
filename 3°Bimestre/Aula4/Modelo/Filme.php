<?php

class Filme {
    private string $titulo;
    private string $genero;
    private string $diretor;
    private int $anoLancamento;

    public function __toString()
    {
        $dados = "Filme: " . $this->titulo . " | Gênero: " . $this->genero . " | Diretor: " . $this->diretor . " | Ano Lançamento: " . $this->anoLancamento . "\n";
        return $dados;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getGenero(): string
    {
        return $this->genero;
    }

    public function setGenero(string $genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    public function getDiretor(): string
    {
        return $this->diretor;
    }

    public function setDiretor(string $diretor): self
    {
        $this->diretor = $diretor;

        return $this;
    }

    public function getAnoLancamento(): int
    {
        return $this->anoLancamento;
    }

    public function setAnoLancamento(int $anoLancamento): self
    {
        $this->anoLancamento = $anoLancamento;

        return $this;
    }
}