<?php

class Escola {

    private string $nome;
    private string $endereco;
    private int $qtdAlunos;


    //Metodos

    public function __construct($a="", $b="", $c=0){

        $this->nome=$a;
        $this->endereco=$b;
        $this->qtdAlunos=$c;
    }

    public function __toString(){
        return "Escola " . $this->getNome() . ", no endereço " . $this->getEndereco() . ", e tem " . $this->getQtdAlunos() . " alunos.\n"; 
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    public function getQtdAlunos()
    {
        return $this->qtdAlunos;
    }

    public function setQtdAlunos($qtdAlunos): self
    {
        $this->qtdAlunos = $qtdAlunos;

        return $this;
    }
}

//Programa Principal

$qtd = readline("Quantas escolas deseja cadastrar?");
echo "\n";

$escolas = array();

for ($i=0; $i < $qtd; $i++) { 
    echo "Dados da Escola " . $i + 1 . ":\n";
    $n = readline("Qual o nome da escola ". $i +1 . "? ");
    $m = readline("Qual o endereço da escola ". $i +1 . "? ");
    $o = readline("Qual a quantidade de alunos da escola ". $i +1 . "? ");
    echo "\n";
    array_push($escolas, new Escola($n, $m, $o));
}

foreach ($escolas as $a) {
    echo $a;
}
$maisAlunos = $escolas[0];
foreach ($escolas as $a){
    if ($a->getQtdAlunos() > $maisAlunos->getQtdAlunos()) {
        $maisAlunos = $a;
    }
}

echo "\nA ecolha com mais alunos é a" . $maisAlunos->getNome() . " com " . $maisAlunos->getQtdAlunos() . " alunos.";