<?php

class Carta{

  private int $numero;
  private string $nome;

  public function __construct($a = 0, $b = ""){
    $this->numero = $a;
    $this->nome = $b;
  }
  public function __toString(){
    $representacaoCartas = [
      "Carta 0" => "\n
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmm      mmmmmm  
            mmmmmmmmmmmmmmmm                mm  
            mmmmmmmmmmmm                        
            mmmmmmmmmm                          
            mmmmmmmm                            
            mmmmmm                        
            mmmm         mmmmmmmm          
            mm         mmm      mmm           
            mm         mmm      mmm         
                       mmm      mmm              
                       mmm      mmm         mm  
                       mmm      mmm         mm  
                       mmm      mmm       mmmm  
                         mmmmmmmm       mmmmmm  
                                      mmmmmmmm  
                                    mmmmmmmmmm  
                                  mmmmmmmmmmmm  
            mm                mmmmmmmmmmmmmmmm  
            mmmmmm      mmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm 
            \n",

      "Carta 1" => "\n
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmm      mmmmmm  
            mmmmmmmmmmmmmmmm                mm  
            mmmmmmmmmmmm                       
            mmmmmmmmmm         mmm                 
            mmmmmmmm         mmmmm                    
            mmmmmm         mmmmmmm          
            mmmm         mmmmmmmmm     
            mm          mmmmmmmmmm    
            mm                mmmm    
                              mmmm       
                              mmmm          mm  
                              mmmm          mm  
                              mmmm        mmmm  
                              mmmm      mmmmmm  
                                      mmmmmmmm  
                                    mmmmmmmmmm  
                                  mmmmmmmmmmmm  
            mm                mmmmmmmmmmmmmmmm  
            mmmmmm      mmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm 
            \n",

      "Carta 2" => "\n
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmm      mmmmmm  
            mmmmmmmmmmmmmmmm                mm  
            mmmmmmmmmmmm                        
            mmmmmmmmmm                          
            mmmmmmmm                            
            mmmmmm          mmmm                
            mmmm        mmmm  mmmmmm            
            mm          mm      mmmm            
            mm          mm    mmmmmm            
                              mmmm              
                            mmmm            mm  
                         mmmmmmm            mm  
                       mmmmmmmm           mmmm  
                      mmmmmmmmmmmm      mmmmmm  
                                      mmmmmmmm  
                                    mmmmmmmmmm  
                                  mmmmmmmmmmmm  
            mm                mmmmmmmmmmmmmmmm  
            mmmmmm      mmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm 
            \n",
      "Carta 3" => "\n
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmm      mmmmmm  
            mmmmmmmmmmmmmmmm                mm  
            mmmmmmmmmmmm                        
            mmmmmmmmmm                          
            mmmmmmmm                            
            mmmmmm        mmmmmm                
            mmmm        mmmm  mmmmmm            
            mm          mm    mmmmmm            
            mm                mmmmmm            
                          mmmmmmmm              
                              mmmmmm        mm  
                        mm      mmmm        mm  
                        mm    mmmmmm      mmmm  
                          mmmmmmmm      mmmmmm  
                                      mmmmmmmm  
                                    mmmmmmmmmm  
                                  mmmmmmmmmmmm  
            mm                mmmmmmmmmmmmmmmm  
            mmmmmm      mmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
            \n",
      "Carta 4" => "\n
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mm  mmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mm  mmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmm      mmmmmm  
            mmmmmmmmmmmmmmmm                mm  
            mmmmmmmmmmmm                        
            mmmmmmmmmm                          
            mmmmmmmm                            
            mmmmmm            mmmm              
            mmmm              mmmm              
            mm              mmmmmm              
            mm            mmmmmmmm              
                          mm  mmmm              
                        mm    mmmm          mm  
                        mmmmmmmmmmmm        mm  
                              mmmm        mmmm  
                              mmmm      mmmmmm  
                                      mmmmmmmm  
                                    mmmmmmmmmm  
                                  mmmmmmmmmmmm  
            mm                mmmmmmmmmmmmmmmm  
            mmmmmm      mmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  mm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  mm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm 
            \n",
      "Carta 5" => "\n
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmm      mmmmmm  
            mmmmmmmmmmmmmmmm                mm  
            mmmmmmmmmmmm                        
            mmmmmmmmmm                          
            mmmmmmmm                            
            mmmmmm        mmmmmmmmmm            
            mmmm          mmmmmmmmmm            
            mm          mmmm                    
            mm          mm  mmmmmm              
                        mmmmmmmmmmm            
                                mmmm        mm  
                        mm      mmmm        mm  
                        mm    mmmmmm      mmmm  
                           mmmmmm       mmmmmm  
                                      mmmmmmmm  
                                    mmmmmmmmmm  
                                  mmmmmmmmmmmm  
            mm                mmmmmmmmmmmmmmmm  
            mmmmmm      mmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm 
            \n",
      "Carta 6" => "\n
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmm      mmmmmm  
            mmmmmmmmmmmmmmmm                mm  
            mmmmmmmmmmmm                        
            mmmmmmmmmm                          
            mmmmmmmm                            
            mmmmmm          mmmmmm              
            mmmm          mmmm    mm            
            mm          mmmmmm    mm            
            mm          mmmm  mmmm              
                        mmmmmm  mmmm            
                        mmmm    mmmm        mm  
                        mmmm    mmmm        mm  
                        mmmmmm  mmmm      mmmm  
                            mmmmmm      mmmmmm  
                        mmmmmmmmmmmm  mmmmmmmm  
                                    mmmmmmmmmm  
                                  mmmmmmmmmmmm  
            mm                mmmmmmmmmmmmmmmm  
            mmmmmm      mmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm 
            \n",

      "Carta 7" => "\n
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mm      mmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmm  mmmmmmmmmmmm    ----    mm  
            mmmm  mmmmmmmmmm  mmmmmmmmmmmmmm    
            mmmm  mmmmmmmm  mmmmmmmmmmmmmmmm    
            mmmmmmmmmmmm  mmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmm  mmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmm  mmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmm  mmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmm  mmmmmm              mmmmmmmm  
            mmmm  mmmmmmmmmmmmmm    mmmmmmmmmm  
            mm  mmmmmmmmmmmmmmmm   mmmmmmmmmmm  
            mm  mmmmmmmmmmmmmmm   mmmmmmmmmm    
              mmmmmmmmmmmmmmmm   mmmmmmmmmmm    
              mmmmmmmmmmmmmmm   mmmmmmmmmm  mm  
              mmmmmmmmmmmmmm   mmmmmmmmmmm  mm  
            mmmmmmmmmmmmmmm   mmmmmmmmmm   mmm  
            mmmmmmmmmmmmmm   mmmmmmmmmmm  mmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmm   mmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmm   mmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmm  mmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmm  mmmmmmmmmm  
              mmmmmmmmmmmmmmmm    mmmmmm  mmmm  
              mmmmmmmmmmmmmm  mmmmmmmmm  mmmmm  
            mm    mmmmmm    mmmmmmmmm   mmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmm        mm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            \n",

      "Carta 8" => "\n
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmm      mmmmmm  
            mmmmmmmmmmmmmmmm                mm  
            mmmmmmmmmmmm                        
            mmmmmmmmmm                          
            mmmmmmmm                            
            mmmmmm        mmmmmm                
            mmmm        mmmm    mm              
            mm          mmmm    mmmm            
                        mmmmmmmmmm              
                        --mmmmmmmmmm            
                        mm    mmmmmm        mm  
                        mm      mmmm        mm  
                        mm      mmmm      mmmm  
                          mmmmmmmm      mmmmmm  
                                      mmmmmmmm  
                                    mmmmmmmmmm  
                                --mmmmmmmmmmmm  
            mm                mmmmmmmmmmmmmmmm  
            mmmmmm      mmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
            \n",
      "Carta 9" => "\n
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm 
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmm      mmmmmm  
            mmmmmmmmmmmmmmmm                mm  
            mmmmmmmmmmmm                        
            mmmmmmmmmm                          
            mmmmmmmm                            
            mmmmmm        mmmmmm                
            mmmm        mmmm  mmmm              
            mm          mmmm    mmmm            
                        mmmm    mmmm            
                        mmmm  mmmmmm            
                          mmmmmmmmm         mm  
                              mmmmm         mm  
                        mm    mmmm        mmmm  
                          mmmmmm        mmmmmm  
                        mmmmmmmmmmmm  mmmmmmmm  
                                    mmmmmmmmmm  
                                mmmmmmmmmmmmmm  
            mm                mmmmmmmmmmmmmmmm  
            mmmmmm      mmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm  
            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
            \n"];
    return "\n" . $representacaoCartas[$this->getNome()];
  }

  public function getNumero(): int
  {
    return $this->numero;
  }

  public function setNumero(int $numero): self
  {
    $this->numero = $numero;

    return $this;
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
}
//onde estão os objetos carta
$baralho = array();
//criando as cartas e adicionando ao baralho
$carta0 = new Carta(0, "Carta 0");
array_push($baralho, $carta0);
$carta1 = new Carta(1, "Carta 1");
array_push($baralho, $carta1);
$carta2 = new Carta(2, "Carta 2");
array_push($baralho, $carta2);
$carta3 = new Carta(3, "Carta 3");
array_push($baralho, $carta3);
$carta4 = new Carta(4, "Carta 4");
array_push($baralho, $carta4);
$carta5 = new Carta(5, "Carta 5");
array_push($baralho, $carta5);
$carta6 = new Carta(6, "Carta 6");
array_push($baralho, $carta6);
$carta7 = new Carta(7, "Carta 7");
array_push($baralho, $carta7);
$carta8 = new Carta(8, "Carta 8");
array_push($baralho, $carta8);
$carta9 = new Carta(9, "Carta 9");
array_push($baralho, $carta9);
//escolhendo uma carta aleatória e armazenando
$cartas = $baralho[array_rand($baralho)];
//Programa principal
$opcao = 0;
$op = 1;
$quantTentativas = 0;
$chute = 0;
$pontuacao = 10;
$acertou = false;
do {
  //menu
  echo "\n....................\n";
  echo "1 - Ver as cartas\n";
  echo "2 - Adivinhar\n";
  echo "3 - Ver sua pontuação\n";
  echo "4 - Dica\n";
  echo "5 - Jogar novamente\n";
  echo "0 - Sair";
  echo "\n....................\n";
  $opcao = readline("Informe a opção: ");
  echo  "\n";

  switch ($opcao) {
    case '1':
      echo "Você selecionou ver as cartas.\n";
      foreach ($baralho as $key => $b) {
        echo "A Carta $key - " . $b;
      }
      break;

    case '2':
      do {
        $chute = readline("Tente a sorte! Qual carta foi sorteada?");
        echo "\n";
        if ($baralho[$chute] == $cartas) {
          $quantTentativas++;
          if ($quantTentativas == 1) {
            echo "Parabéns!!! Você acertou a carta com " . $quantTentativas . " tentativa.\n";
            echo "A carta $chute foi a carta sorteada. Veja a  representação dela: \n" .  $cartas;
            $acertou = true;
          } elseif ($quantTentativas != 1) {
            echo "Parabéns!!! Você acertou a carta com " . $quantTentativas . " tentativas.\n";
            echo "A carta $chute foi a carta sorteada. Veja a  representação dela: \n" .  $cartas;
            $acertou = true;
          }
        } elseif ($baralho[$chute] != $cartas && $chute >= 0 && $chute <= count($baralho)) {
          $quantTentativas++;
          echo  "Você errou!! Tente novamente.\n";
          $op = readline("Deseja desistir? Se SIM digite 0, se NÃO digite qualquer número.  ");
          echo "\n";
          if ($op == 0) {
            echo "Você escolheu desistir na tentativa " . $quantTentativas .  ". A carta sorteada foi a $chute: \n" . $cartas;
            echo "\nPrograma encerrado.\n";
          } elseif ($op != 0) {
            echo  "Você escolheu continuar. Tente adivinhar novamente!\n";
          }
        } else {
          $quantTentativas++;
          echo "Essa carta não existe.\n";
        }
      } while (!$acertou && $op != 0);
      break;

    case '3':
      echo "Você escolheu ver sua pontuação.\n";
      if ($quantTentativas == 0) {
        echo "Você ainda não tentou  adivinhar a carta. Portanto sua pontuação ainda é 0.";
      } elseif ($quantTentativas > 1 && $acertou  == true) {
        $pontuacao *= $quantTentativas;
        echo "Sua pontuação é de " . $pontuacao . " pontos.\n";
      } elseif ($quantTentativas == 1 && $acertou == true) {
        $pontuacao = 100;
        echo "Você acertou de primeira, e sua placar é de " . $pontuacao . " pontos.\n";
      } else {
        $pontuacao -= $quantTentativas;
        echo "Você errou a carta sorteada " . $quantTentativas  . " vezes. Então sua pontuação é " . $pontuacao . " pontos.\n";
      }
      break;

    case '4':
      echo "Você escolheu receber uma dica.\n";
      if ($chute <= 5) {
        echo "A carta sorteada é menor ou igual a 5.\n";
      } else {
        echo "A carta sorteada é maior do que 5.\n";
      }
      break;

    case '5':
      echo "Você escolheu jogar novamente. Portanto será feito un novo sorteio.\nLEMBRETE: Suas tentaivas foram zeradas!\n";
      $cartas = $baralho[array_rand($baralho)];
      $quantTentativas = 0;
      echo "Nova carta sorteada. Volte ao menu e tente divinhar novamente!!\n";
      break;

    case '0':
      echo "Programa encerrado.\n";
      break;

    default:
      echo "Essa opção não existe.\n";
      break;
  }
} while ($opcao != 0 && $op != 0);
