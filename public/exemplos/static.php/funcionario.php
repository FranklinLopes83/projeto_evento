<?php

class Funcionario{
private static $nome;
private static $salario;

public static function relatorio($nome, $salario){
    self::$nome = $nome;
    self::$salario = $salario;
    echo "Ola sou o " . self::$nome. " e recebo" . self::$salario;

}

}