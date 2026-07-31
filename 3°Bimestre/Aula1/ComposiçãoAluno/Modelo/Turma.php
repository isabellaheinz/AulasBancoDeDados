<?php

class Turma {
    private string $nome;
    private string $curso;
    private array $alunos;

    public function __construct()
    {
        $this->alunos = array();
    }
    
    public function adicionarAluno($aluno) {
        array_push($this->alunos,$aluno);
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

    public function getCurso(): string
    {
        return $this->curso;
    }

    public function setCurso(string $curso): self
    {
        $this->curso = $curso;

        return $this;
    }

    public function getAlunos(): array
    {
        return $this->alunos;
    }

    public function setAlunos(array $alunos): self
    {
        $this->alunos = $alunos;

        return $this;
    }
}