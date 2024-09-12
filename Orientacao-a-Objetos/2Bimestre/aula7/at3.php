<?php

class Posto {
    private int $litrosGasolina;
    private array $abastecimentosGasolina;

    public function __construct(){
        $this->litrosGasolina = 0;
        $this->abastecimentosGasolina = array();
    }
    public function abastecer($litros) {
        if ($this->litrosGasolina < $litros) {
            echo "Não foi possível abastecer, pois não temos esta quantidade de gasolina no momento.\n";
            return false;
        } else {
            echo "Abastecimento realizado!";
            $this->litrosGasolina -= $litros;
            array_push($this->abastecimentosGasolina, $litros);
            return true;
        }
    }

    public function reporEstoque($litros) {
        $this->litrosGasolina += $litros;
        return "A gasolina foi reposta!!\n"; 
    }

    public function getLitrosGasolina(): int
    {
        return $this->litrosGasolina;
    }

    public function setLitrosGasolina(int $litrosGasolina): self
    {
        $this->litrosGasolina = $litrosGasolina;

        return $this;
    }

    public function getAbastecimentosGasolina(): array
    {
        return $this->abastecimentosGasolina;
    }

    public function setAbastecimentosGasolina(array $abastecimentosGasolina): self
    {
        $this->abastecimentosGasolina = $abastecimentosGasolina;

        return $this;
    }
}
$postos = new Posto();

do{

    echo "\n************************************";
    echo "\n******* MENU ***********************";
    echo "\n*** 1 - Abastecer ******************";
    echo "\n*** 2 - Repor Estoque **************";
    echo "\n*** 3 - Listar Abastecimento *******";
    echo "\n*** 0 - Sair ***********************";
    echo "\n************************************\n\n";

    $opcao = readline("Qual opção deseja realizar?");
    echo "\n";

    switch ($opcao) {
        case '1':
            $litros = readline("Quantos litros quer abastecer? ");
            echo $postos->abastecer($litros);
        break;

        case '2':
            $litros = readline("Quantos litros quer repor no posto? ");
            echo $postos->reporEstoque($litros);
        break;

        case '3':
            echo "A lista de registro de abastecimentos será imprimida.\n\n";
            foreach ($postos->getAbastecimentosGasolina() as $i => $p) {
                echo "- Abastecimento " . ($i + 1) . ": " . $p . " litros.\n";
            }
        break;

        case '0':
            echo "Serviço encerrado.\n";
        break;
        
        default:
            echo "\nDigite um número disponível.\n";
        break;
    }
}
while ($opcao != 0);