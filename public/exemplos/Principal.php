<?php
include("heranca1.php");

$v1 = new Veiculo("Fiat", "Argo");
$v1->ligar();
echo "<br>";
$v1->desligar();
echo "<br>";
$v1->estaLigado();
echo "<hr>";
$c1 = new Carro("Crevolet", "Onix");
$c1->ligar();
echo "<br>";
$c1->limparParaBrisa();
echo "<br>";
$m1 = new Moto("Honda", "Fan 160");
$m1->usarDescanso();