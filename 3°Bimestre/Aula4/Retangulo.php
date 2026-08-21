<?php

require_once("IFormaGeometrica.php");

class Retangulo implements IFormaGeometrica {

    private int $base;
    private int $altura;

    public function getArea(){
        $area = $this->base * $this->altura;
        return $area;
    }

    public function getDesenho()
    {
      $dados = " ┌───────────────────┐";
      $dados .= " │                   │";
      $dados .= " │                   │";
      $dados .= " │                   │";
      $dados .= " └───────────────────┘";

      return $dados;
    }

    

    public function getBase(): int
    {
        return $this->base;
    }

    public function setBase(int $base): self
    {
        $this->base = $base;

        return $this;
    }

    public function getAltura(): int
    {
        return $this->altura;
    }

    public function setAltura(int $altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}