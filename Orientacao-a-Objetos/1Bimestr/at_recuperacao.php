<?php 
$Formula1 = array();
function pipe($a){
foreach ($a as $item){
    $primeiro = true;
        foreach ($item as $valor) {
            if ($primeiro) {
                print $valor;
                $primeiro = false;
            } else {
                print (" | " . $valor);
            }
        }
    print("\n");
    }
}
function pergunta(){
    global $Formula1;
    $quant = readline("Quantas vezes gostaria de responder?\n");
        for ($i=0; $i < $quant + 3; $i++) { 
            $pessoa = readline("Por favor, informe seu nome.\n");
            $equipe = readline("Qual a sua equipe favorita?\n");
            $piloto = readline("Qual seu piloto favorito?\n");
            $pilotoAntigo = readline("Se pudesse trazer um piloto antigo (que não corre mais) para correr novamente, quem seria?\n");
            $vencedor = readline("Qual piloto você acha que vai ganhar a corrida na Bélgica?\n");
                $questionario = array("pessoa" => $pessoa,
                                      "equipe" => $equipe,
                                      "piloto" => $piloto,
                                      "pilotoAntigo" => $pilotoAntigo,
                                      "vencedor" => $vencedor);
                    $Formula1[] = $questionario;
        } 
    return $Formula1;
}
print("Este é uma pesquisa sobre seus gostos de Fórmula 1.\n");
$Formula1 = pergunta();
pipe($Formula1);