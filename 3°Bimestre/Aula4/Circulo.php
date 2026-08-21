<?php

require_once("IFormaGeometrica.php");

class Circulo implements IFormaGeometrica {

    private float $raio;

    public function getArea()
    {
        $area = ($this->raio * $this->raio) * 3.14;
        return $area;
    }

    public function getDesenho()
    {
        $dados = "    =  =     ";         
        $dados .= " =        =   ";    
        $dados .= "=          = ";     
        $dados .= "=          = ";     
        $dados .= " =        =   ";   
        $dados .= "    =  =     ";

        return $dados;
    }

    public function getRaio(): int
    {
        return $this->raio;
    }

    public function setRaio(int $raio): self
    {
        $this->raio = $raio;

        return $this;
    }
}