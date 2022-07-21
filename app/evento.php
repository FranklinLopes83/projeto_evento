<?php

$nomeEvento = $_POST["nomeEvento"];
$dataEvento = $_POST["dataEvento"];

echo " O {$nomeEvento} vai acontecer na data {$dataEvento}";
echo "<hr>";

// MOSTRANDO VETORES DE FORMA COMPLETA
//print_r($_POST); 
var_dump($_POST);

function validarData($data){
$dataEvento = new DateTime($data); //Esra classe precisa de um padrão americano para funcioinar
echo $dataEvento->format("d/m/Y"); //Mostrando a data no padrão brasileiro
}
validarData($dataEvento);