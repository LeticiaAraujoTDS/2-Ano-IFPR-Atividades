<?php

require_once("Veiculos.php");

class MicroOnibus extends Veiculos{

    public function getTipo()
    {
        return "micro-ônibus";
    }

    public function calcularTotal()
    {
        $total = ($this->getKmRodados() * $this->getValorAdicional()) + $this->getValorAluguel();
        return $total;
    }

    public function __toString()
    {
        return "O veículo " . $this->getTipo() . ", foi alugado por R$ " . $this->getValorAluguel() . ", rodou ". $this->getKmRodados() . " quilômetros com custo total de R$ " . $this->calcularTotal(). "\n";
    }
}