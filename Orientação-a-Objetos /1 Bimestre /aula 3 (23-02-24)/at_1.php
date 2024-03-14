<?php
//Funções
function graus($a)
{
    $resultados = array();
    foreach ($a as $C) {
        $F = $C * 1.8 + 32;
        array_push($resultados, $F);
    }
    return $resultados;
}
function fatorial($a)
{
    $resultados = array();
    for ($i = 0; $i < 5; $i++) {
        if ($a[$i] >= 1) {
            $c = 1;
            $n = $c;
            for ($j = $a[$i]; $j >= 1; $j--) {
                $c = $n * $j;
                $n = $c;
            }
            array_push($resultados, $c);
        } else {
            $resultados[] = 0;
        }
    }
    return $resultados;
}
function quadratica($a)
{
    $resultados = array();
    foreach ($a as $x) {
        $F = (($x * $x) + (2 * $x) + 4) / 2;
        array_push($resultados, $F);
    }
    return $resultados;
}
function virgula($a)
{
    for ($i = 0; $i < sizeof($a); $i++) {
        if ($i + 1 == sizeof($a)) {
            print $a[$i] . ".\n";
        } else {
            print $a[$i] . ", ";
        }
    }
}
function F_virgula($a)
{
    for ($i = 0; $i < sizeof($a); $i++) {
        if ($i + 1 == sizeof($a)) {
            print $a[$i] . "°F.\n";
        } else {
            print $a[$i] . "°F, ";
        }
    }
}
//Programa Principal

$vetor0 = array();
$vetor1 = array();
$vetor2 = array();
$vetor3 = array();

//Vetor 0
for ($i = 0; $i < 5; $i++) {
    $valor = readline("Informe um valor: ");
    array_push($vetor0, $valor);
}
print "\nOs valores do vetor são: \n";
virgula($vetor0);

//Vetor 1 
/*F = C * 1,8 + 32*/
$vetor1 = graus($vetor0);
print "\nOs valores do vetor 1 são: \n";
F_virgula($vetor1);

//Vetor 2
$vetor2 = fatorial($vetor0);
print "\nOs valores do vetor 2 são: \n";
virgula($vetor2);

//Vetor 3
$vetor3 = quadratica($vetor0);
print "\nOs valores do vetor 3 são: \n";
virgula($vetor3);