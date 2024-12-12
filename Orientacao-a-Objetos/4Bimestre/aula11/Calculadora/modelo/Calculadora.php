<?php

abstract class Calculadora
{
    private int $numA;
    private int $numB;

    abstract public function calcular();

    public function __construct($a, $b)
    {
        $this->numA = $a;
        $this->numB = $b;
    }

    /**
     * Get the value of numA
     */
    public function getNumA(): int
    {
        return $this->numA;
    }

    /**
     * Set the value of numA
     */
    public function setNumA(int $numA): self
    {
        $this->numA = $numA;

        return $this;
    }

    /**
     * Get the value of numB
     */
    public function getNumB(): int
    {
        return $this->numB;
    }

    /**
     * Set the value of numB
     */
    public function setNumB(int $numB): self
    {
        $this->numB = $numB;

        return $this;
    }
}
