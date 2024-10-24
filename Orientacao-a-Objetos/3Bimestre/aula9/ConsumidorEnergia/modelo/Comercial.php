<?php

require_once("IConsumidorEnergia.php");

class Comercial implements IConsumidorEnergia
{

    private int $consumo;

    public function getValorFatura()
    {
        if ($this->consumo <= 100) {
            return $this->consumo * 1.45;
        } else {
            return $this->consumo * 1.60;
        }
    }

    public function getConsumo(): int
    {
        return $this->consumo;
    }

    public function setConsumo(int $consumo): self
    {
        $this->consumo = $consumo;

        return $this;
    }
}
