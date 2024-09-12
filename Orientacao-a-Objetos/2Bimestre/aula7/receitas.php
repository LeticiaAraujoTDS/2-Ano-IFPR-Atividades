<?php

class Receita {

    private string $descricao;
    private float $valor;

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    public function __toString(){
        $c = $this->descricao . ", custando R$ " . $this->valor . ".\n";
        return $c;
    }

}

class Despesa {

    private string $descricao;
    private float $valor;

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    public function __toString()
    {
        $a = $this->descricao . ", custando R$ " . $this->valor . ".\n";
        return $a;
    }
}

$arrayReceitas = array();
$arrayDespesas = array();

do {

    echo "\n************************************";
    echo "\n******* MENU ***********************";
    echo "\n*** 1 - Adicionar Receita **********";
    echo "\n*** 2 - Adicionar Despesa **********";
    echo "\n*** 3 - Listar Receitas ************";
    echo "\n*** 4 - Listar Despesas ************";
    echo "\n*** 5 - Sumarizar ******************";
    echo "\n*** 0 - Sair ***********************";
    echo "\n************************************\n\n";

    $opcao = readline("O que deseja fazer? ");
    echo "\n";

    switch ($opcao) {
        case '1':
            $receitas = new Receita();
            $receitas->setDescricao(readline("Infome a receita: "));
            echo "\n";
            $receitas->setValor(readline("Informe o valor total da receita: "));
            echo "\nAdicionando receita . . .\n";
            array_push($arrayReceitas, $receitas);
            break;
            
            
        case '2':
            $despesas = new Despesa();
            $despesas->setDescricao(readline("Infome a despesa: "));
            echo "\n";
            $despesas->setValor(readline("Informe o valor total da despesa: "));
            echo "\nAdicionando despesa . . .\n";
            array_push($arrayDespesas, $despesas);
            break;

        case '3':
            echo "\nListando Receitas: ";
            foreach ($arrayReceitas as $i => $r) {
                print "\n" . $i + 1 . " Receita: " . $r;
            }
            break;

        case '4':
            echo "\nListando Despesas: ";
            foreach ($arrayDespesas as $i=> $d) {
                print "\n" . $i + 1 . " Despesa: " . $d;
            }
            break;

        case '5':
            echo "\nSomando . . .";
            $totalReceitas = 0;
            $totalDespesas = 0;
            foreach ($arrayReceitas as $i) {
                $totalReceitas += $i->getValor();
            }
            foreach ($arrayDespesas as $i) {
                $totalDespesas += $i->getValor();
            }
            $saldo = $totalReceitas - $totalDespesas;
            printf("\nSaldo: R$ %.2f", $saldo);
            printf("\nTotal de receitas: R$ %.2f", $totalReceitas);
            printf("\nTotal de despesas: R$ %.2f", $totalDespesas);
            break;

            case '0':
            echo "Serviço encerrado.\n";
        break;

        default:
            # code...
            break;
    }
} while ($opcao !=0);
