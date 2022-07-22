<?php
class Evento{
    // Atrbutos
public $nomeEvento; 
public $dataEvento;

//Metodos: Comportamentos
function validaData($data){

    $dataEvento = new DateTime($data);// Esta classe precisa de uma data no padrão americano para funcionar
    $dataAtual = new DateTime("now");// estamos pegando a data atual
    echo $dataEvento->format("d/m/Y");// mostrando a data no padrão brasileiro
    echo "<br> A data de hoje é: ";
    print_r($dataAtual);

    if($dataEvento > $dataAtual){
        echo "<p>Data do evento cadastrado com sucesso!</p>";
    }
    else{
        echo "<p>A data do evento não pode ser igual ou anterior à data atual</p>";
    }
}

function recebeDados($campos){
    $this->nomeEvento = $campos["nomeEvento"];
    $this->dataEvento = $campos["dataEvento"];
    echo "O {$this->nomeEvento} vai acontecer na data {$this->dataEvento}";
}
}

    //Instaciando um objeto
$meuEvento = new Evento();

print_r($meuEvento);
echo "<hr>";
$meuEvento->recebeDados($_POST);