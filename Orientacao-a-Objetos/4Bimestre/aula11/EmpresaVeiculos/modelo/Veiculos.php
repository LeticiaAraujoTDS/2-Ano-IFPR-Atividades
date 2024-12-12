<?php

abstract class Veiculos{
    private float $valorAluguel;
    private float $valorAdicional;
    private int $kmRodados;

    abstract public function calcularTotal();

    public function __construct($a = 0.0, $b = 0.0 , $c = 0)
    {
        $this->valorAluguel = $a;
        $this->valorAdicional = $b;
        $this->kmRodados = $c;
    }
    
    /**
     * Get the value of valorAluguel
     */
    public function getValorAluguel(): float
    {
        return $this->valorAluguel;
    }

    /**
     * Set the value of valorAluguel
     */
    public function setValorAluguel(float $valorAluguel): self
    {
        $this->valorAluguel = $valorAluguel;

        return $this;
    }

    /**
     * Get the value of valorAdicionar
     */
    public function getValorAdicional(): float
    {
        return $this->valorAdicional;
    }

    /**
     * Set the value of valorAdicionar
     */
    public function setValorAdicional(float $valorAdicional): self
    {
        $this->valorAdicional = $valorAdicional;

        return $this;
    }

    /**
     * Get the value of kmRodados
     */
    public function getKmRodados(): int
    {
        return $this->kmRodados;
    }

    /**
     * Set the value of kmRodados
     */
    public function setKmRodados(int $kmRodados): self
    {
        $this->kmRodados = $kmRodados;

        return $this;
    }
}