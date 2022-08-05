<?php

require ("Heranca2.php");

$p1 = new Pessoa("Rodrigo", 37);
$p1->relatorio();
echo "<br>";
$a1 = new Aluno("Paulo", 19, 1598);
$a1->relatorio();