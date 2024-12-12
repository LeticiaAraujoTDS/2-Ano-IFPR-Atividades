<?php

require_once("Veiculos.php");

class Onibus extends Veiculos{

    public function calcularTotal()
    {
        $total = ($this->getKmRodados() * $this->getValorAdicional()) + $this->getValorAluguel();
        return "O veículo Ônibus, foi alugado por R$ " . $this->getValorAluguel() . ", rodou ". $this->getKmRodados() . " quilômetros com custo total de R$ " . $total. "\n";
    }
}