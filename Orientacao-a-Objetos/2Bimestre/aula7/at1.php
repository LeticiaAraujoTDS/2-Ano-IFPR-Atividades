<?php

class Prato {

    private string $descricao;
    private int $qtd;
    private float $valorUnitario;

    public function __construct($descricao = "", $qtd = 0, $valorUnitario = 0.0){

        $this->descricao = $descricao;
        $this->qtd = $qtd;
        $this->valorUnitario = $valorUnitario;
        
    }

    public function getValorTotal() {
        return ($this->qtd * $this->valorUnitario);
    }

    public function __toString(){
        return $this->descricao. ", com " . $this->qtd . " pratos - custando R$" . $this->valorUnitario . " cada. O valor total deste pedido é: R$" . $this->getValorTotal() . ".\n";
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getQtd(): int
    {
        return $this->qtd;
    }

    public function setQtd(int $qtd): self
    {
        $this->qtd = $qtd;

        return $this;
    }

    public function getValorUnitario(): float
    {
        return $this->valorUnitario;
    }

    public function setValorUnitario(float $valorUnitario): self
    {
        $this->valorUnitario = $valorUnitario;

        return $this;
    }
}

$pratos = array(); 

for ($i=1; $i <= 3; $i++) { 
    echo "Prato $i:\n";
    $nome = readline("Qual o nome do prato? ");
    $quant = readline("Quantos pedidos irá fazer? ");
    $valor = readline("Qual o valor de cada prato? ");
    $prato = new Prato($nome, $quant, $valor);
    echo "\n";
    array_push($pratos, $prato);
}

foreach ($pratos as $i => $p) {
    echo "Prato " . ($i + 1) . ": " . $p; 
}

$valor = 0;
for ($i=0; $i < 3; $i++) { 
    $valor += $pratos[$i]->getValorTotal();
}

echo "O valor total dos pratos é R$" . $valor . ".\n";