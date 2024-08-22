<?php

class Produto {

    //Atributos
    private $descricao;
    private $unidadeMedida;
    private $quantidade;
    private $valorUnitario;


    //Método 

    public function getValorTotal ():float {
        $valorTotal = $this->quantidade * $this->valorUnitario;
        return $valorTotal;
    }

    public function __toString(){
        
        $frase = $this->descricao . " ( " . $this->unidadeMedida . " ) | " . $this->quantidade . " X " . $this->valorUnitario . " = " . $this->getValorTotal() . " \n";
        return $frase;
    }

    public function dados () {}

    // GET e SET
    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getUnidadeMedida()
    {
        return $this->unidadeMedida;
    }

    public function setUnidadeMedida($unidadeMedida): self
    {
        $this->unidadeMedida = $unidadeMedida;

        return $this;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade): self
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    public function getValorUnitario()
    {
        return $this->valorUnitario;
    }

    public function setValorUnitario($valorUnitario): self
    {
        $this->valorUnitario = $valorUnitario;

        return $this;
    }
}

//Programa 

echo "Produto 1:\n";

$produto1 = new Produto();
$produto1->setDescricao(readline("Informe o nome do produto 1: "));
$produto1->setUnidadeMedida(readline("Informe a Unidade de Medida (kg, m, pacote) 1: "));
$produto1->setQuantidade(readline("Informe a quantidade que irá comprar 1: "));
$produto1->setValorUnitario(readline("Informe o valor do produto 1: "));
print ("Produto: " . $produto1 );


echo "Produto 2:\n";

$produto2 = new Produto();
$produto2->setDescricao(readline("Informe o nome do produto 2: "));
$produto2->setUnidadeMedida(readline("Informe a Unidade de Medida (kg, m, pacote) 2: "));
$produto2->setQuantidade(readline("Informe a quantidade que irá comprar 2: "));
$produto2->setValorUnitario(readline("Informe o valor do produto 2: "));


print ("Produto: " . $produto2 );

echo "Produto 3:\n";

$produto3 = new Produto();
$produto3->setDescricao(readline("Informe o nome do produto 3: "));
$produto3->setUnidadeMedida(readline("Informe a Unidade de Medida (kg, m, pacote) 3: "));
$produto3->setQuantidade(readline("Informe a quantidade que irá comprar 3: "));
$produto3->setValorUnitario(readline("Informe o valor do produto 3: "));

print ("Produto: " . $produto3);

$maiorValor = $produto1;

if ($produto2->getValorTotal() > $maiorValor->getValorTotal()) {
    $maiorValor = $produto2;
}

if ($produto3->getValorTotal() > $maiorValor->getValorTotal()) {
    $maiorValor = $produto3;
}

print "Venda com o maior valor total do produto: " . $maiorValor->getDescricao() . " (" . $maiorValor->getUnidadeMedida() . ")";