<?php

class Pokemon {

    public $nome;
    public $tipo;
    public $ataque;
    public $defesa;
    public $velocidade;
    public nivel;

    function __construct($nome, $tipo, $ataque, $defesa, $velocidade, $nivel){
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->ataque = $ataque;
        $this->defesa = $defesa;
        $this->velocidade = $velocidade;
        $this->nivel = $nivel;
    }
    function batalha($a){
        echo "O Pokémon $a está em uma batalha.\n";
    }
    
    function subirNivel ($b, $c, $d) {
        if ($d % 2 == 0) {
            $b += 1;
            print "O Pokémon $c subiu de nivel! Seu nivel é $b agora. \n";        
        }
        else {
            $b -= 1;
            print "Infelizmente o Pokémon $c não teve sorte, e seu nível desceu. Agora o nível de $c é $b.\n";
        }
    }
    function aumentarExperiencia ($e) {
        print "Após a batalha, o Pokémon $e ganhou experiencia! \n";
    }
}

$num = readline("Quantos pokémon deseja fazer? ");

for ($i=1; $i <= $num ; $i++) { 
    $nome = readline("Qual o nome do pokémon $i? \n");
    $tipo = readline("Qual o tipo do pokémon $i? \n");
    $ataque = readline("Qual o ataque do pokémon $i? \n");
    $defesa = readline("Qual a defesa do pokémon $i? \n");
    $velocidade = readline("Qual a velocidade do pokémon $i? \n");
    $nivel = readline("Qual o nível do pokémon $i? \n");
    $pokemons = new Pokemon ($nome,$tipo, $ataque, $defesa, $velocidade, $nivel);

    $pokemons-> batalha($nome);
    print "Vamos descobrir se o Pokémon foi bem na batalha. ALERTA: Se ele não for bem, seu nível descerá.\n";
    $opcao = readline("Informe um número: (escolha bem)");
    $pokemons-> subirNivel($nivel, $nome, $opcao);
    $pokemons-> aumentarExperiencia($nome); 
}
