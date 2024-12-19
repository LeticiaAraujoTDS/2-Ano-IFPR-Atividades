<?php

abstract class Funcionario
{

    private string $nome;

    public function getDados()
    {
        $dados = "O funcionário " . $this->getNome() . ", cargo " . $this->getFuncao() . ", possui salário de R$" . number_format($this->getSalario(), 2, ',', '.') . ".\n";
        return $dados;
    }
    abstract public function getSalario();
    abstract public function getFuncao();

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }
}
