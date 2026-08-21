<?php

require_once("IFormaGeometrica.php");

class Quadrado implements IFormaGeometrica {
    private int $lado;

    public function getArea(){
        $area = $this->lado * $this->lado;
        return $area;
    }

    public function getDesenho()
    {
       $dados = " ┌─────────┐ ";
       $dados .= " │         │ ";
       $dados .= " │         │ ";
       $dados .= " │         │ ";
       $dados .= " │         │ ";
       $dados .= " └─────────┘ ";

       return $dados;
    }

    

    public function getLado(): int
    {
        return $this->lado;
    }

    public function setLado(int $lado): self
    {
        $this->lado = $lado;

        return $this;
    }
}