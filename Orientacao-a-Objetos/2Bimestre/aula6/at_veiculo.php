<?php

//1- Declarar a classe Veiculo
class Veiculos {
    private $capacidade;
    private $passagensVendidas;

    public function __construct($capacidade) {
        $this->capacidade = $capacidade;
        $this->passagensVendidas = 0;        
    }

    public function venderPassagem($quantidade) {
        if($this->capacidade > ($this->passagensVendidas + $quantidade)) { 
            $this->passagensVendidas += $quantidade;
            return true;
        } else
            return false;
    }

    //Método para retornar a quantidade de lugares disponíveis no veículo
    public function getLugaresDisponiveis() {
        return $this->capacidade - $this->passagensVendidas;
    }

    //Método toString para imprimir o objeto como texto
    public function __toString() {
        $dados = printf("Capacidade: %d | Passagens Vendidas: %d\n", $this->capacidade, $this->passagensVendidas);
        return $dados;
    }

    public function getPassagensDisponiveis() {
        $disponiveis = $this->capacidade - $this->passagensVendidas;
        return $disponiveis;
    }

    /**
     * Get the value of capacidade
     */
    public function getCapacidade()
    {
        return $this->capacidade;
    }

    /**
     * Get the value of passagensVendidas
     */
    public function getPassagensVendidas()
    {
        return $this->passagensVendidas;
    }
}


//2- Ler a capacidade do veículo e criar o objeto
$capacidade = readline("Informe a capacidade do veículo: ");
$onibus = new Veiculos($capacidade);

while (true) {
    echo "\n";
    echo "Passagens disponíveis: " . $onibus->getPassagensDisponiveis() . "\n";
    $qtdPassagens = readline("Informe a quantidade de passagens que deseja comprar: ");

    if ($qtdPassagens <= 0)
        break;

    $passagensVendidas = $onibus->venderPassagem($qtdPassagens);
    if ($passagensVendidas) {
        echo "Passagens vendidas com sucesso.\n";
        echo $onibus;
    } else {
        echo "Não foi possível vender as passagens de ônibus.\n";
    }
}



//3- Vender passagens
do {
    echo "\n\n---BILHETERIA DE PASSAGENS----\n";
    $qtdPassagens = readline("Informe a quantidade de passagens (0 para sair): ");

    if($qtdPassagens > 0) {
        $vendaRealizada = $onibus->venderPassagem($qtdPassagens);
        if($vendaRealizada) {
            echo "Passagem(s) vendida(s) com sucesso!\n";
            echo $onibus;
        } else {
            echo "Erro ao vender a(s) passagen(s).\n";
            echo "O veículo possui apenas " . $onibus->getLugaresDisponiveis() . " lugares disponíveis!\n";
        }
    }
} while($qtdPassagens > 0);