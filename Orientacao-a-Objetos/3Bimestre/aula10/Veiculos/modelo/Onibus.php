<?php

require_once("CarroPasseio.php");
require_once("IVeiculo.php");

class Onibus extends CarroPasseio implements IVeiculo{
    private $pesoMax;

    public function getDados(){
        $dados = "Modelo: " . $this->getModelo();
        $dados .= " | Velocidade Máxima: " . $this->getVelocidadeMax();
        $dados .= " | Cor: " . $this->getCor();
        $dados .= " | Quantidade de Carga: " . $this->getQtdPassageiros();
        $dados .= " | Peso Máximo: " . $this->pesoMax;
        $dados .= "\n";
    }

    /**
     * Get the value of pesoMax
     */
    public function getPesoMax()
    {
        return $this->pesoMax;
    }

    /**
     * Set the value of pesoMax
     */
    public function setPesoMax($pesoMax): self
    {
        $this->pesoMax = $pesoMax;

        return $this;
    }
}
