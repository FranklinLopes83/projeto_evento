<?php
class Animal{
    protected $nome;
    protected $tipo;
    protected $origem;
    protected $nomeClasse;

    public function __construct($nome, $tipo, $origem){
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->origem = $origem;
        $this->nomeClasse = get_class($this);
    }

    public function selvagem(){
           echo " Sou da classe $this->nomeClasse sou um {$this->nome} um {$this->tipo} nativo da {$this->origem} sou selvagem ";
    }

    public function extinto(){
            echo " Sou da classe $this->nomeClasse sou um {$this->nome} um tipo {$this->tipo} nativo da {$this->origem} estou extinto ";
    }

}

class Cachorro extends Animal{
    private $raca;

    public function __construct($nome, $tipo, $origem, $raca){
        parent::__construct($nome, $tipo, $origem, $raca); 
        $this->raca = $raca;
    }

public function manso(){
    echo "Estou na classe {$this->nomeClasse} meu nome é {$this->nome} sou de médio {$this->tipo} da raça {$this->raca} porém sou manso";
    }

}

class Peixe extends Animal{
    private $especie;

    public function __construct($nome, $tipo, $origem, $raca, $especie ){
        parent::__construct($nome, $tipo, $origem, $raca, $especie); 
        $this->especie = $especie;
    }

public function relatorio(){
    echo "Estou na classe {$this->nomeClasse} meu nome é {$this->nome} da especié {$this->especie} ";
    }
}


