<?php

//1 - ler os dados das 4 pessoas
$pessoas = array(); //matriz
for ($i=1; $i <= 4; $i++){ 
    echo "\nPessoa " . $i . "\n";
    $pessoa ["name"]= readline("Informe o seu nome: ");
    $pessoa ["idade"]= readline("Informe a sua idade: ");
    $pessoa ["cidadeNat"]= readline ("Informe a sua cidade natal: ");
    $pessoa ["profissao"]= readline("Informe a sua profissão: ");
    //1.1 - adicionar a $pessoa em $pessoas
    array_push($pessoas, $pessoa);
}
//2 - encontrar a pessoa mais velha
$pessoaVelha = $pessoas[0];
foreach ($pessoas as $a) {
    if($a["idade"] == $pessoaVelha["idade"])
    $pessoaVelha = $a;
}
//3 - imprimir os dados das pessoas
echo " Dados da pessoa mais velha: \n";
echo "Nome: " . $pessoaVelha['nome'];
// e assim vai com as outras informações
