<?php

require_once("Veiculo.php");
require_once("IVeiculo.php");

class Caminhao extends Veiculo implements IVeiculo{
    private $altura;
    private $qtdCarga;

    public function getDados(){
        $dados = "Modelo: " . $this->getModelo();
        $dados .= " | Velocidade Máxima: " . $this->getVelocidadeMax();
        $dados .= " | Cor: " . $this->getCor();
        $dados .= " | Quantidade de Carga: " . $this->qtdCarga;
        $dados .= " | Altura: " . $this->altura;
        $dados .= "\n";
    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     */
    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Get the value of qtdCarga
     */
    public function getQtdCarga()
    {
        return $this->qtdCarga;
    }

    /**
     * Set the value of qtdCarga
     */
    public function setQtdCarga($qtdCarga): self
    {
        $this->qtdCarga = $qtdCarga;

        return $this;
    }
}