<?php

class Pessoa{
    public $nome;
   public $idade;
   public $peso;
   public $altura;
   public $sexo;
    
   function __construct($nome, $idade, $peso, $altura, $sexo){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->peso = $peso;
            $this->altura = $altura;
            $this->sexo = $sexo;
    }
   

   function falar($texto){
       echo $texto;
   }

   function perguntar($texto){
    echo $texto;
   }
}

$pessoa1 = new Pessoa("Franklin", 30, 70.5, 180, "masculino");
$pessoa1->falar("Fazendo aquele curso maroto"); // Acessando o metodo falar da classe 
echo "<br>";
$pessoa1->perguntar("E voce?");
echo "<hr>";



echo "Meu nome é {$pessoa1->nome} minha idade é {$pessoa1->idade} meu peso é {$pessoa1->peso} minha altura é{$pessoa1->altura} sou do sexo {$pessoa1->sexo} <hr>";

$pessoa2 = new Pessoa("Joana", 28, 55.3, 1.78, "Feminino");
echo "Oie sou a {$pessoa2->nome} minha idade é {$pessoa2->idade} meu peso é {$pessoa2->peso} minha altura é{$pessoa2->altura} sou do sexo {$pessoa2->sexo}";
