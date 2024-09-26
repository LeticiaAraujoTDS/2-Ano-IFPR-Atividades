<?php

require_once("Departamento.php");

class Funcionario {

    private string $nome;
    private string $cargo;
    private float $salario;
    private Departamento $depto;

    public function __toString(){
        return $this->getNome() . ", no cargo: " . $this->getCargo() . " e com o salário R$" . $this->getSalario() . ". Pertence ao Departamento " . $this->getDepto()->getNome() . " na sala " . $this->getDepto()->getNumeroSala() . ".\n";
    }
    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }

    public function setCargo(string $cargo): self
    {
        $this->cargo = $cargo;

        return $this;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function setSalario(float $salario): self
    {
        $this->salario = $salario;

        return $this;
    }

    public function getDepto(): Departamento
    {
        return $this->depto;
    }

    public function setDepto(Departamento $depto): self
    {
        $this->depto = $depto;

        return $this;
    }
}