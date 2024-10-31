<?php

require_once("Veiculo.php");
require_once("IVeiculo.php");

class CarroPasseio extends Veiculo implements IVeiculo{
    private $qtdPassageiros;
    
    public function getDados(){
        $dados = "Modelo: " . $this->getModelo();
        $dados .= " | Velocidade Máxima: " . $this->getVelocidadeMax();
        $dados .= " | Cor: " . $this->getCor();
        $dados .= " | Quantidade de Carga: " . $this->qtdPassageiros;
        $dados .= "\n";
    }

    /**
     * Get the value of qtdPassageiros
     */
    public function getQtdPassageiros()
    {
        return $this->qtdPassageiros;
    }

    /**
     * Set the value of qtdPassageiros
     */
    public function setQtdPassageiros($qtdPassageiros): self
    {
        $this->qtdPassageiros = $qtdPassageiros;

        return $this;
    }
}