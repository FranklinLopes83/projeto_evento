<?php

class Funcionarios{
    public $nome;
    public $codigo;
    public $salario;

    function __construct($nome, $codigo, $salario){
            $this->nome = $nome;
            $this->codigo = $codigo;
            $this->salario = $salario;
        
    }
    
    function relatorio(){
        echo "{$this->nome}, {$this->codigo}, {$this->salario}";
    }
}

$funcionarios1 = new Funcionarios("Paulo", 387, 2577.58 );
$funcionarios1->relatorio();
echo "Sou o {$funcionarios1->nome} meu codigo é {$funcionarios1->codigo} meu salário é {$funcionarios1->salario}";
