<?php

require_once("IConsumidorEnergia.php");

class Residencial implements IConsumidorEnergia {

    private float $consumo;

    public function getValorFatura()
    {
        $totalFatura = $this->consumo * 1.05;
        return $totalFatura;
        
    }
    
    public function getConsumo(): float
    {
        return $this->consumo;
    }

    public function setConsumo(float $consumo): self
    {
        $this->consumo = $consumo;

        return $this;
    }
}