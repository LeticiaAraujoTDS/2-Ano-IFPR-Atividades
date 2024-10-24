<?php

require_once("IConsumidorEnergia.php");

class Residencial implements IConsumidorEnergia
{

    private int $consumo;

    public function getValorFatura()
    {
        return $this->consumo * 1.05;
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
