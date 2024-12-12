<?php

require_once("modelo/Produto.php");
require_once("modelo/Livro.php");
require_once("modelo/Computador.php");
require_once("modelo/Balde.php");

$produto = new Produto();
$produto->setDescricao("Um guarda-chuva");
$produto->setUnidadeMedida("1 peça");
echo $produto->GetDados();

$livro = new Livro();
$livro->setAutor("Rick Riordan");
$livro->setDescricao("Percy Jackson e o Ladrão de Raios");
$livro->setUnidadeMedida("1 livro");
echo $livro->GetDados();

$computador = new Computador();
$computador->setDescricao("Um notebook");
$computador->setProcessador("I5-12450H");
$computador->setMemoria("16gb RAM");
$computador->setUnidadeMedida("1 peça");
echo $computador->GetDados();

$balde = new Balde();
$balde->setDescricao("Um balde");
$balde->setCapacidade("20 litros");
$balde->setUnidadeMedida("1 peça");
echo $balde->GetDados();