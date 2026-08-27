<?php

require_once("IConsumidorEnergia.php");

class Industrial implements IConsumidorEnergia {
    private float $consumo;

    public function getValorFatura()
    {
        $totalFatura = 0;
        if ($this->consumo > 500 ){
            $this->consumo -= 500;
            $totalFatura += $this->consumo * 2.30;
            $totalFatura += 900;

            return $totalFatura;
        } else if ($this->consumo <= 500) {
            $totalFatura += $this->consumo * 1.80;
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