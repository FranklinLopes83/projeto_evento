<?php

require ("animal.php");
$a1 = new Animal( "Tigre de Bengala", "felino", "Ilha de Java");
$a1->selvagem();
echo "<br>";
$a1 = new Animal( "Tigre de Bengala", "felino", "Ilha de Java");
$a1->extinto();
echo "<br>";
$c1 = new Cachorro( "Bob", "porte", "USA", "Pit Bull" );
$c1->manso();
echo "<br>";
$p1 = new Peixe( "Dimmy", "", "", "", "palhaço");
$p1->relatorio();