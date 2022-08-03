<?php

use Pessoa as GlobalPessoa;

class Pessoa{
    protected $nome;
    protected $idade;
    protected $nomeClasse;
    protected const QUALIDADE = "Pensador";

    function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->nomeClasse = get_class($this);
    }

    public function relatorio(){
        echo "Olá, estou na classe {$this->nomeClasse}, meu nome é {$this->nome}, e tenho {$this->idade} anos  e minha Qualodade é ".self::QUALIDADE; // Constantes sãp acessadas com Self e não com o This
    }
}
  
class Aluno extends Pessoa{
    private $matricula;
    protected const QUALIDADE = "estudioso";

    public function __construct($nome, $idade, $matricula){
        parent::__construct($nome, $idade); // Desta forma estou indicando que vou reutilizar o contrutor da classe mães
        $this->matricula = $matricula;
    }

    public function relatorio(){
        echo "Estou na classe {$this->nomeClasse} meu nome é {$this->nome} minha idade é {$this->idade} e minha matricula é {$this->matricula} minha qualidade é ".parent::QUALIDADE;
    }
    
}