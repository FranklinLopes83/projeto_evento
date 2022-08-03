<?php 
class Veiculo{
    private $marca;
    private $modelo;
    private $ligado; //Pra saver se o carro está ligado ou não
    protected $nomeClasse; // Somente as classes filhas poderão acessar esse atributo diretamente

    public function __construct($marca, $modelo){   
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->nomeClasse = get_class($this); //Pegando o nome da classe
    }

    public function ligar(){
        $this->ligado = true; 
        echo "$this->nomeClasse modelo {$this->modelo} e marca {$this->marca} está ligado";
    }

    public function desligar(){
        $this->desligado = false; 
        echo "$this->nomeClasse modelo {$this->modelo} e marca {$this->marca} está desligado";
 }

    public function estaLigado(){
    echo ($this->nomeClasse) ? "Está ligado" : "Está desligado";
     /*if($this->ligado)
     echo "Esta ligado";
    }
    else{
        echo "Esta desligado";
    }*/
    }
}

// A classe carro está erdando todas as informações da classe Veiculo//
class Carro extends Veiculo{

    public function limparParaBrisa(){
        echo "{$this->nomeClasse} ligou o para0brisa";
    }
      

}




