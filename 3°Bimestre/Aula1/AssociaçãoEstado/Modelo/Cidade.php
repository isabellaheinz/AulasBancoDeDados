<?php

require_once("Estado.php");

class Cidade {
    private string $nome;
    private int $qntHabi;
    private int $altitude;
    private Estado $estado;

    

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getQntHabi(): int
    {
        return $this->qntHabi;
    }

    public function setQntHabi(int $qntHabi): self
    {
        $this->qntHabi = $qntHabi;

        return $this;
    }

    public function getAltitude(): int
    {
        return $this->altitude;
    }

    public function setAltitude(int $altitude): self
    {
        $this->altitude = $altitude;

        return $this;
    }

    public function getEstado(): Estado
    {
        return $this->estado;
    }

    public function setEstado(Estado $estado): self
    {
        $this->estado = $estado;

        return $this;
    }
}