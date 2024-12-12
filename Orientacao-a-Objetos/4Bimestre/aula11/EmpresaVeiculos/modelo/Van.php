<?php

require_once("Veiculos.php");

class Van extends Veiculos{

    public function calcularTotal()
    {
        $total = ($this->getKmRodados() * $this->getValorAdicional()) + $this->getValorAluguel();
        return "O veículo van, foi alugado por R$ " . $this->getValorAluguel() . ", rodou ". $this->getKmRodados() . " quilômetros com custo total de R$ " . $total. "\n";
    }
}