<?php

require_once("Veiculos.php");

class MicroOnibus extends Veiculos{

    public function calcularTotal()
    {
        $total = ($this->getKmRodados() * $this->getValorAdicional()) + $this->getValorAluguel();
        return "O veículo micro-ônibus, foi alugado por R$ " . $this->getValorAluguel() . ", rodou ". $this->getKmRodados() . " quilômetros com custo total de R$ " . $total. "\n";
    }
}