<?php

require_once("Modelo/Aluno.php");
require_once("Modelo/Turma.php");

$turma = new Turma;
$turma->setNome("2°Ano");
$turma->setCurso("TDS");

$aluno = new Aluno;
$aluno->setNome("Isabella");
$aluno->setIdade(16);
$aluno->setTurma($turma);

$turma->adicionarAluno($aluno);

$aluno = new Aluno;
$aluno->setNome("Cayo");
$aluno->setIdade(16);
$aluno->setTurma($turma);

$turma->adicionarAluno($aluno);

$aluno = new Aluno;
$aluno->setNome("Benjamin");
$aluno->setIdade(16);
$aluno->setTurma($turma);

$turma->adicionarAluno($aluno);

$aluno = new Aluno;
$aluno->setNome("Henry");
$aluno->setIdade(17);
$aluno->setTurma($turma);

$turma->adicionarAluno($aluno);

$aluno = new Aluno;
$aluno->setNome("Estevão");
$aluno->setIdade(16);
$aluno->setTurma($turma);

$turma->adicionarAluno($aluno);

foreach ($turma->getAlunos() as $aluno) {
    echo $aluno;
}
