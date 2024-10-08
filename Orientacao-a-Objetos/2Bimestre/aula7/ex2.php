<?php

class Pessoa {

    //Atributos
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

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): self {
        $this->nome = $nome;

        return $this;
    }

    public function getSobrenome(): string {
        return $this->sobrenome;
    }

    public function setSobrenome(string $sobrenome): self {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    public function getIdade(): int {
        return $this->idade;
    }

    public function setIdade(int $idade): self {
        $this->idade = $idade;

        return $this;
    }
}

//Programa Principal
$pessoas = array();

do {
    echo "\n******************************";
    echo "\n******* MENU *****************";
    echo "\n*** 1 - Cadastrar Pessoa *****";
    echo "\n*** 2 - Listar Pessoa ********";
    echo "\n*** 3 - Excluir Pessoa *******";
    echo "\n*** 0 - Sair *****************";
    echo "\n******************************\n\n";

    $escolha = readline("Qual serviço deseja realizar? ");
    echo "\n";

    switch ($escolha) {

        case '0':
            echo "Serviço encerrado.\n";
            break;

        case '1':
            echo "Cadastro:\n\n";
            $a = readline("Qual seu 1º nome? ");
            $b = readline("Qual seu sobrenome? ");
            $c = readline("Qual a sua idade? ");
            array_push($pessoas, new Pessoa($a, $b, $c));
            echo "Pessoa cadastrada.\n";
            break;

        case '2':
            echo "Lista de pessoas cadastradas:\n\n";
            foreach ($pessoas as $i => $p) {
                echo ($i + 1) . " - " . $p;
            }
            break;

        case '3':
            echo"Você escolheu excluir uma pessoa, a lista será exibida agora.\n\n";
            //Listar pessoas
            foreach ($pessoas as $i => $p) {
                echo ($i + 1) . " - " . $p;
            }
            //Ler pessoa que deve ser excluída
            $op = readline("Informe a pessoa que deseja excluir: ");
            $op--;
            //Excluir a pessoa
            if ($op >= 0 && $op < count($pessoas)) {
                #Excluir
                array_splice($pessoas, $op, 1);
                echo "Pessoa excluída com sucesso!";

            } else 
                echo "A pessoa escolhida não existe.\n";
            break;


        
        default:
            echo "\nDigite um número disponível.\n";
            break;

    }

} while ($escolha != 0);