<?php
require_once("modelo/time.php");
require_once("modelo/jogador.php");
//1 - criar objeto time

$time= new Time;
$time->setNome("abc");
$time->setCidade("def");

//print_r($time);

//2 - criar objeto jogador

$suarez = new Jogador;
$suarez->setNome("ABCDEF");
$suarez->setNumero("9");
$suarez->setTime($time);

$jog = new Jogador();
$jog->setNome("AAAA");
$jog->setNumero("10");
$jog->setTime($time);
//print_r($jog1);

//3- Imprimir o nome do time do jogador

//echo $suarez->getTime()->getNome() . "\n" ;
//$t = $suarez->getTime();
//echo $t->getCidade();
$jogadores = array();

array_push($jogadores, $suarez);
array_push($jogadores, $jog);
$time->setJogadores($jogadores);
print_r($time->getJogadores());