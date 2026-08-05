<?php

require_once("Departamento.php");

class Funcionario{
    private string $nome;
    private string $cargo;
    private int $salario;
    private Departamento $departamento;

    public function __toString()
    {
        $dados = "Funcionário: " . $this->nome . " | Cargo: " . $this->cargo . " | Salário: " . $this->salario . " | " . $this->departamento;
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

    public function getCargo(): string
    {
        return $this->cargo;
    }

    public function setCargo(string $cargo): self
    {
        $this->cargo = $cargo;

        return $this;
    }

    public function getSalario(): int
    {
        return $this->salario;
    }

    public function setSalario(int $salario): self
    {
        $this->salario = $salario;

        return $this;
    }

    public function getDepartamento(): Departamento
    {
        return $this->departamento;
    }

    public function setDepartamento(Departamento $departamento): self
    {
        $this->departamento = $departamento;

        return $this;
    }
}