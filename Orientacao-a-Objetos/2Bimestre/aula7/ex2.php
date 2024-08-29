<?php

class Pessoa {

    private string $nome;
    private string $sobrenome;
    private int $idade;

    //Metodos

    public function __construct($a="", $b="", $c=0){
        $this->nome=$a;
        $this->sobrenome=$b;
        $this->idade=$c;
    }

    public function __toString(){
        
        return $this->getNome() . " " . $this->getSobrenome() . ", " . $this->getIdade() . " anos.\n";
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

    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }

    public function setSobrenome(string $sobrenome): self
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }
}

//Programa Principal
$pessoas = array();

do {
    echo "\n******* Menu *****************";
    echo "\n*** 1 - Cadastrar Pessoa *****";
    echo "\n*** 2 - Listar Pessoa ********";
    echo "\n*** 0 - Sair *****************\n\n";

    $escolha = readline("Qual serviço deseja realizar? ");
    echo "\n";

    switch ($escolha) {
        case '0':
            echo "Serviço encerrado.\n";
            break;

        case '1':
            echo "Você escolheu cadastrar uma pessoa.\n";
            $a = readline("Qual seu 1º nome? ");
            $b = readline("Qual seu sobrenome? ");
            $c = readline("Qual a sua idade? ");
            array_push($pessoas, new Pessoa($a, $b, $c));
            break;

        case '2':
            echo "Você escolheu imprimir as informações de pessoas.\n";
            foreach ($pessoas as $p) {
                echo $p;
            }
            break;
        
        default:
            echo "\nDigite um número disponível.\n";
            break;
    }
} while ($escolha != 0);