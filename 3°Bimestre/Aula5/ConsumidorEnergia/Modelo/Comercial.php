<?php

require_once("IConsumidorEnergia.php");

class Comercial implements IConsumidorEnergia {

    private float $consumo;

    public function getValorFatura()
    {
        $totalFatura = 0;
        if ($this->consumo > 100 ){
            $this->consumo -= 100;
            $totalFatura += $this->consumo * 1.60;
            $totalFatura += 145;

            return $totalFatura;
        } else if ($this->consumo <= 100) {
            $totalFatura += $this->consumo * 1.45;
            return $totalFatura;
        }
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