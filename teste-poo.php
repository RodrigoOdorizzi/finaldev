<?php

require_once "autoload.php";

$marca1 = new Marca;

$marca1->setCodigo(1);
$marca1->setDescricao("HP");

echo "-->Marca 1<br>";
echo $marca1;

echo "<br><br>";

$marca2 = new Marca;

$marca2->setCodigo(2);
$marca2->setDescricao("LG");

echo "-->Marca 2<br>";
echo $marca2;

?>
